<?php

require("config.php");

outboundeventTime($hoursfromUTC,$outboundprevEventTime,$outboundEventTime,$outboundnextEventTime);


function outboundeventTime($offset,&$outboundprevEventTime,&$outboundEventTime,&$outboundnextEventTime)

{
   	$outboundEventTime=$outboundprevEventTime=$outboundnextEventTime=0; 
	$txtFolder="outboundtimes/";

require("timevariables.php");

	//read today
	$lines=array_map("trim",file($txtFolder."{$date}.txt"));
	sort($lines);
	if(!$lines)return;

	//read tomorrow
	$linesNext=array_map("trim",file($txtFolder."{$dateNext}.txt"));
	sort($linesNext);
	if(!$linesNext)return 0;

	//read yesterday
	$linesPrev=array_map("trim",file($txtFolder."{$datePrev}.txt"));
	sort($linesPrev);
	if(!$linesPrev)return 0;

	for($i=0;$i<count($lines);$i++)
	{
		if($lines[$i]>$time) 
		{
			//first event for day
		    if($i==0)
				$outboundprevEventTime=$linesPrev[count($linesPrev)-1]; //take from prev day
		    else
				$outboundprevEventTime=$lines[$i-1];

		    $outboundEventTime=$lines[$i];

			//last event for day
		    if($i== (count($lines)-1)  )
				$outboundnextEventTime=$linesNext[0]; //take from next day
		    else
				$outboundnextEventTime=$lines[$i+1];
			return;
		}
	}
	
	//default first event from nextday
    $outboundprevEventTime=$lines[count($lines)-1];
    $outboundEventTime=$linesNext[0];
    $outboundnextEventTime=$linesNext[1];

}

?>