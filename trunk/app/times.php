<?php
require("inbound.php");
require("outbound.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>When's the next Manly Ferry?</title>
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="A website built to answer a single purpose - when's the next Manly Ferry? Manly Ferry times from Circulay Quay, Sydney, to Manly Wharf.">
<meta name="keywords" content="sydney, australia, manly, ferry, timetable, ">

<!-- iPhone -->
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<!--<link rel="apple-touch-icon" href="http://www.nikeplusedit.com/apple-touch-icon.png"/>-->
 
<!-- css -->
<style media="screen" type="text/css"> @import "styles.css"; </style>
</head>
<body>


<div id="content">

<h1>When is the Next Manly Ferry?</h1>

<div class="infocontainer">
	
	<div class="direction" id="outbound">
		<span class="routename" id="direction1">Manly - Circular Quay</span>
			<div class="times">
			<div class="timenext">
			<span class="eventtype">Next</span><span class="time"><?php echo $outboundEventTime; ?></span></div>
			<div class="timenextplusone">
			<span class="eventtype">Then</span><span class="time"><?php echo $outboundnextEventTime; ?></span></div>
			<div class="timemissed">
			<span class="eventtype">Missed</span><span class="time"><?php echo $outboundprevEventTime; ?></span></div>
		</div>
	</div>	
	
	<div class="direction" id="inbound">
	<span class="routename" id="direction2">Circular Quay - Manly</span>
		<div class="times">
			<div class="timenext">
			<span class="eventtype">Next</span><span class="time"><?php echo $inboundEventTime; ?></span></div>
			<div class="timenextplusone">
			<span class="eventtype">Then</span><span class="time"><?php echo $inboundnextEventTime; ?></span></div>
			<div class="timemissed">
			<span class="eventtype">Missed</span><span class="time"><?php echo $inboundprevEventTime; ?></span></div>
		</div>
	</div>

</div>

<div class="timemeta"><span class="timenow">The time now is 1745.</span><span class="timetableused">Times shown have been generated from a standard Monday timetable.</span></div>
<!-- add in tooltip "In case we've missed a public holiday"-->
<!-- add in tooltip "So you know our server time is correct"-->

<div id="footer">
Built by <a href="#">Keith Mason</a> | <a href="#">Disclaimer</a> | <a href="#">More Info</a>
<div id="disclaimer">
This site is in not affiliated with Sydney Ferries, does not display live departure information. Times are drawn from timetables as published at 3rd March 2009. 
</div>
</div>
<!--end content -->
</body>
</html>
