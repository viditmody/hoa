#!/usr/bin/perl
#
#     COUNTER.CGI
#
#     This counter script is meant to be used for a site-wide setup, although
# it can certainly be used by individuals if they want counters on their own
# pages.
#
#     For an explanation of how this script works and how to make sure it
# will work with your server, see:  
# http://web.sau.edu/~mkruse/www/info/ssi.html
#
#     To install this script:
# 1.  Move it to its own directory, like /cgi-bin/counters/
#     It will create many files in the dirctory where it is located, so put
#     it somewhere off on its own.
# 2.  make it executable (chmod a+x counter.cgi)
# 3.  make the directory where it is at world-writable (so the server can 
#     update the counter files).
# That's it!
# Call it as you would any other server-side-include
#

print "Content-type: text/html\n\n";
($PAGE = $ENV{'DOCUMENT_URI'}) =~ s/\//_/g;
if (!(-e $PAGE)){open(NEW,"> $PAGE");print NEW "0";close(NEW);exit(0); }
open(COUNTER,"+< $PAGE");
flock(COUNTER,2);
$_=<COUNTER>;
seek(COUNTER,0,0);
$_++;  print;  print COUNTER;
flock(COUNTER,8);
close(COUNTER);
