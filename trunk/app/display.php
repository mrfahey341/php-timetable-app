<?php
require("app/app.php");
?>

<div class="infocontainer">
	
	<div class="direction" id="outbound">
		<span class="routename" id="direction1"><? echo "$origin - $destination"; ?></span>
			<div class="times">
			<div class="timenext">
			<span class="eventtype"><? echo $next; ?></span><span class="time"><? echo $outboundEventTime; ?>.</span></div>
			<div class="timenextplusone">
			<span class="eventtype"><? echo $then; ?></span><span class="time"><? echo $outboundnextEventTime; ?>.</span></div>
			<div class="timemissed">
			<span class="eventtype"><? echo $missed; ?></span><span class="time"><? echo $outboundprevEventTime; ?>.</span></div>
		</div>
	</div>	
	
	<div class="direction" id="inbound">
	<span class="routename" id="direction2"><? echo "$destination - $origin"; ?></span>
		<div class="times">
			<div class="timenext">
			<span class="eventtype"><? echo $next; ?></span><span class="time"><? echo $inboundEventTime; ?>.</span></div>
			<div class="timenextplusone">
			<span class="eventtype"><? echo $then; ?></span><span class="time"><? echo $inboundnextEventTime; ?>.</span></div>
			<div class="timemissed">
			<span class="eventtype"><? echo $missed; ?></span><span class="time"><? echo $inboundprevEventTime; ?>.</span></div>
		</div>
	</div>

</div>

<div class="timemeta"><span class="timenow"><? echo "$timenowtext  $timenow"; ?>.</span><span class="timetableused"><? echo $daycalcexplanation; ?>.</span></div>
<br/><? echo "$shortdisclaimer $officialtimetable"; ?>

