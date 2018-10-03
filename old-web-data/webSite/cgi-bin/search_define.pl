############################################################
#
# Define Variables for the search_engine.cgi script
#
############################################################

# root_web_path is the path to the directory tree you
# wish to search
#
# server_url is the actual url for this site.  Files that
# are positive matches get prefixed with the url information
# in a hypertext reference.
#Replace domain with your domain name minus the .com

$root_web_path = "/www/murietahoa";
$server_url = "http://murietahoa.org";

#
# unwanted files is a list of pattern matched filenames
# you do not wish to search for keywords in.  Note that
# the pattern matches against the full path and filename
# so that you can exclude certain directories.
# 
@unwanted_files = ("wusage(.*)html",
                   "cgi-bin(.*)html");
#
# The following are routines that print the HTML code related to
# various parts of the program.  You can edit the cosmetics of the
# program by altering the code below.  This means you can alter
# the cosmetics without directly altering the code in the
# actual search_engine.pl program.
#

############################################################
#
# subroutine: PrintHeaderHTML
#   Usage:
#     &PrintHeaderHTML;
#
#   Parameters:
#     None
#
#   Output:
#     Prints the HTML code for the header of the keyword
#     return results
# 
############################################################

sub PrintHeaderHTML
{

    print <<__HEADERHTML__;
<HTML><BODY BGCOLOR="#ffffff"><HEAD><TITLE>$search_results_title</TITLE></HEAD>
<BODY><CENTER>
<HR><P>
</CENTER>
<CENTER><H2>Your keyword(s), <I>$keywords</I>, 
appeared on the following pages:</H2></CENTER><UL>
__HEADERHTML__
} # End of PrintHeaderHTML

############################################################
#
# subroutine: PrintFooterHTML
#   Usage:
#     &PrintFooterHTML;
#
#   Parameters:
#     None
#
#   Output:
#     Prints the HTML code for the footer of the keyword
#     return results
# 
############################################################

sub PrintFooterHTML
{
    print <<__FOOTERHTML__;
<P><CENTER><I>Note: If you are using Netscape, you can refine your
keyword search by chosing "find" from the button bar and 
finding your keyword on  whichever of the above pages you call 
up.
</I>

<P>
<CENTER>

<HR>
</CENTER> </BODY> </HTML>

__FOOTERHTML__

} # End of PrintFooterHTML

############################################################
#
# subroutine: PrintNoHitsBodyHTML
#   Usage:
#     &PrintNoHitsBodyHTML;
#
#   Parameters:
#     None
#
#   Output:
#     Prints the HTML code for the body of the keyword
#     search if no results were found
# 
############################################################

sub PrintNoHitsBodyHTML
{
    print <<__NOHITS__;

<P>
<CENTER>
<H2>Sorry, No Pages Were Found With Your Keyword(s).</H2>
</CENTER>
<P>
__NOHITS__

} # End of PrintNoHitsBodyHTML

############################################################
#
# subroutine: PrintBodyHTML
#   Usage:
#     &PrintBodyHTML;
#
#   Parameters:
#     None
#
#   Output:
#     Prints the HTML code for the body of the keyword
#     search result set
# 
############################################################


sub PrintBodyHTML
{
    local($filename, $title) = @_;

    print <<__BODYHTML__;
<LI>
<B>
<A HREF="$server_url/$filename">
$title</A>
</B>
 (/$filename)<BR>
__BODYHTML__

} # End of PrintBodyHTML

############################################################
#
# subroutine: PrintNoKeywordHTML
#   Usage:
#     &PrintNoKeywordHTML;
#
#   Parameters:
#     None
#
#   Output:
#     Prints the HTML code for a form allowing the user
#     to enter a keyword since no keyword was alreay entered
# 
############################################################

sub PrintNoKeywordHTML
{
    print <<__NOKEYHTML__;
<HTML>
<HEAD>
<TITLE>murietahoa Keyword Search Engine</TITLE>
</HEAD> 
<BODY BGCOLOR="#ffffff">
<CENTER><H2>murietahoa Keyword Search Engine</H2></CENTER>
<HR>
<P>
<FORM ACTION="search.cgi" METHOD="POST">
<B>Enter your keywords:</B>
<INPUT TYPE="text" SIZE="30" NAME="keywords" MAXLENGTH="80">
<P>
<INPUT TYPE=checkbox NAME="exact_match"> Exact Match Search
<HR>
<CENTER>
<INPUT TYPE="SUBMIT" VALUE="Submit keywords">
<INPUT TYPE="RESET" VALUE="Clear this form">
</CENTER>
</FORM>
</BODY></HTML>


__NOKEYHTML__

} # End of PrintNoKeywordHTML


