<?php

require("config.php");

inboundheventTime($hoursfromUTC,$inboundprevEventTime,$inboundEventTime,$inboundnextEventTime);


function inboundheventTime($offset,&$inboundprevEventTime,&$inboundEventTime,&$inboundnextEventTime)

{
    $inboundEventTime=$inboundprevEventTime=$inboundnextEventTime=0; 
	$txtFolder="inboundtimes/";

require("timevariables.php");

	//read today
	$lines=array_map("trim",file($txtFolder."{$date}.txt"));
	sort($lines);
	if(!$lines)return;

	//read tomorrow
	$linesNext=array_map("trim",file($htomorrowtxtfile));
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
				$inboundprevEventTime=$linesPrev[count($linesPrev)-1]; //take from prev day
		    else
				$inboundprevEventTime=$lines[$i-1];

		    $inboundEventTime=$lines[$i];

			//last event for day
		    if($i== (count($lines)-1)  )
				$inboundnextEventTime=$linesNext[0]; //take from next day
		    else
				$inboundnextEventTime=$lines[$i+1];
			return;
		}
	}
	
	//default first event from nextday
    $inboundprevEventTime=$lines[count($lines)-1];
    $inboundEventTime=$linesNext[0];
    $inboundnextEventTime=$linesNext[1];

}

?>