#!/usr/local/bin/perl
$starttime = time;
############################################################
#                       SEARCH_ENGINE.CGI
#
# This script was written by Gunther Birznieks
# Date Created: 4-18-96
#
# Purpose: Provides a mechanism to allow a user to search an entire
# directory structure for keyword(s) on the internet.
#
# Main Procedures:
#   
# Inputs:
#   Form Variables: 
#     keywords = keywords to search for
#     exact_match = "on" if the search is exact rather than pattern
#                   match based
#
# Outputs:
#   A Form for entering a keyword if keywords is NULL
#   Otherwise, A page of results from the search
#
############################################################


#$| = 1; # Set output to flush directly (for troubleshooting)
$lib = "/usr/local/lib"; # Default path for loading libraries
require "$lib/cgi-lib.pl";

# Define Server specific variables
require "search_define.pl";

# The following outputs the CGI Header
print &PrintHeader;

# Get the form variables
&ReadParse;

$keywords = $in{'keywords'};
$exact_match = $in{'exact_match'};

# Take the keywords that were entered and parse them into an array
# of keywords based on word boundary (\s+ splits on whitespace)

@keyword_list = split(/\s+/,$keywords);

# If the person has not yet entered a search term, output a form that
# will ask them for a search word.

if ($keywords eq "") {
    &PrintNoKeywordHTML;
    exit;
} # End of if keywords

# Begin to send back the dynamic search results page with the header.

&PrintHeaderHTML;

#
# We traverse the whole directory structure under $root_web_path
# and in doing so, we also parse the HTML files to see if they have
# the keywords and what their title is.
#
# The following sets up the initial variables
# @dirs is the array of directories as a placeholder for going back up
# the directory tree when we run out of files in a subdirectory.
# $cur_dir is the current directory number and is a reference to the @dirs
# array.
# 
# Directory Handles are straight ASCII and consist of "DIR" + $cur_dir

$number_of_hits = 0;
$cur_dir = 0;
chdir($root_web_path);
foreach (`find -iname "*.htm*" -follow`) {
	if (&unwanted($_)) { next; }
	$fullpath = $_;
	$fullpath =~ s/^\.\///;
	@not_found_words = @keyword_list;
	open(SEARCHFILE, $fullpath);
	$line = join(" ", <SEARCHFILE>);
	close(SEARCHFILE);
	&FindKeywords($exact_match, $line, *not_found_words);
	if (@not_found_words < 1) {
		# Isolate out the <TITLE></TITLE> information
		$line =~ m!<title>(.*?)</title>!i;
		$title = $1;

		if ($title eq "") {
		    $title = "No Title Given";
		}
		&PrintBodyHTML($fullpath, $title);
		$number_of_hits++;

	} # If there are no not_found_words
}
# Print up the footer

if ($number_of_hits == 0) {
&PrintNoHitsBodyHTML;
}
print "<hr>";
$total = time -$starttime;
print "Took: $total secs.\n<hr>";
&PrintFooterHTML;

sub unwanted {
	local($fn) = @_;
	foreach (@unwanted_files) {
		if ($fn =~ /$_/) {
			return 1;
		}
	}
	return 0;
}
############################################################
#
# subroutine: FindKeywords
#   Usage:
#     &FindKeywords("on", $line, *not_found_words);
#
#   Parameters:
#     $exact_match = "on" if we are not pattern matching
#     $line = line to search on
#     *not_found_words = array of keywords that have not 
#                        matched yet
#
#   Output:
#     *not_found_words will have keywords spliced out of it
#     as they are found.
# 
############################################################

sub FindKeywords
{
    local($exact_match, $line, *not_found_words) = @_;
    local($x, $match_word);

    if ($exact_match eq "on") {
	for ($x = @not_found_words; $x > 0; $x--) {
# \b matches on word boundary	    
	    $match_word = $not_found_words[$x - 1];
	    if ($line =~ /\b$match_word\b/i) {
		splice(@not_found_words,$x - 1, 1);
	    } # End of If
	} # End of For Loop
    } else {
	for ($x = @not_found_words; $x > 0; $x--) {
	    $match_word = $not_found_words[$x - 1];
	    if ($line =~ /$match_word/i) {
		splice(@not_found_words,$x - 1, 1);
	    } # End of If
	} # End of For Loop
    } # End of ELSE

} # End of FindKeywords
