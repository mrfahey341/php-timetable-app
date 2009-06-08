<?php
require("head.php");
?>

<h4>More Information</h4>

<p>Timetables were last updated on <? echo $timetableslastupdated; ?>, <a href="<? echo $sourcetimetableurl; ?>">from here</a> and public holiday dates were last updated on <? echo $publicholidaylastchecked; ?>, <a href="<? echo $publicholidaysourceurl; ?>">from here.</a></p>

<p>This site was born out of a need to save valuable seconds when checking timetables for the Ferry to and from Manly, in Sydney, Australia. Visiting the Sydney Ferries timetable was mildly frustrating, involving a user scanning the timetable for the next time, and working out if they need to view a weekend timetable or not. This is work a computer should do for us - and now does.</p>

<p>The timetables are kept manually updated from the Sydney Ferries website. They were last updated on <? echo $timetableslastupdated; ?> and while I endeavour to keep the timetable and other information up to date and correct, it's possible that I may miss an update. If this is the case and the times appear incorrect, please contact me using the feedback link on the right hand side of the page, and I'll update the timetables. If you feel really generous you can update them yourself - simply download the following files, edit them, and email them back to me - I'll be happy to update them.</p>

<ul>
<li><a href="inboundtimes.php">Inbound Times (zip)</a> (<? echo "$origin - $destination"; ?>)</li>
<li><a href="outboundtimes.php">Outbound Times (zip)</a> (<? echo "$destination - $origin"; ?>)</li>
</ul>

<?php
require("foot.php");
?>