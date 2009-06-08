<?php 

// Variables for setup / config
$hoursfromUTC = "+10"; // Your timezone offset - e.g. "+1". Don't forget to check fo daylight savings
$siteurl = "http://nextmanlyferry.com"; //site URL

$timetableslastupdated = "April 14th, 2009"; // date the timetables were last amended, as text
$publicholidaylastchecked = "April 14th, 2009"; // date public holidays file last updated

$sourcetimetableurl ="http://www.sydneyferries.info/timetables/manly-ferry.htm"; // URL of official timetable
$publicholidaysourceurl = "http://www.industrialrelations.nsw.gov.au/holidays/index.html#nsw"; //source of public holiday dates



// Frontend Text

$title = "When is the next Manly Ferry?"; //title of the site
$metadescription = "Answering just one question - when is the next Manly Ferry? Manly Ferry times from Circulay Quay, Sydney, to Manly Wharf"; // used as the site meta description for SEO purposes. This appears as the site description in google for example.
$metakeywords = "sydney, australia, manly, ferry, timetable, "; // used as the site meta keywords for SEO purposes.

$origin = "Manly" ; // Journey Origin - outbound times are departing from this location
$destination = "Circular Quay" ; //Journey Destination - inbound times are departing from this location

$next = "Next:"; // text before the next time
$then = "Then:"; // text before the next +1 time
$missed = "Missed:"; // text before the just missed time

$officialtimetable = "If accurate times are essential, please check the <a href=\"$sourcetimetableurl\">official timetable.</a>";

$timenowtext = "The time now is" ; // text explaining the current time

$regulartimetableusedtext = "Timetable used is for a regular "; // text explaining what timetable is being used, day used (e.g. Monday) follows this text

$holidaytimetableusedtext ="Today is a public holiday, and therefore a public holiday timetable is in effect."; // text explaining that a public holiday timetable is in effect

$shortdisclaimer = "This site is in not affiliated with Sydney Ferries, and does not display live departure information."; // disclaimer text in the footer

$lasttimetabletext = "Times are drawn from timetables as published, and last updated here on"; // last timetable update text

?>