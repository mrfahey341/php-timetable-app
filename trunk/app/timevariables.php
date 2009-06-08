<?php
require("config.php");

$timestamp=time()+3600*$hoursfromUTC; // to necessary timezone
$date=gmdate("D",$timestamp); // Mon to Sun
$dateNext=gmdate("D",$timestamp+24*3600); // Mon to Sun, for next Day
$datePrev=gmdate("D",$timestamp-24*3600); // Mon to Sun, for prev Day
$time=gmdate("Hi",$timestamp);  //as hhii
	
$todaysdate=gmdate("dmY",$timestamp);
$tomorrowsdate=gmdate("dmY",$timestamp+24*3600); // date tomorrow
$yesterdaysdate=gmdate("dmY",$timestamp-24*3600); // date yesterday
	
$htxtfolder= $txtFolder . "publicholidays/";
$htodaytxtfile= $htxtfolder . $todaysdate . ".txt";
$htomorrowtxtfile = $htxtfolder . $tomorrowsdate . ".txt";
$hyesterdaytxtfile = $htxtfolder . $yesterdaysdate . ".txt";

// for front end display
$dateused=gmdate("l",$timestamp);
$timenow=gmdate("Hi",$timestamp); 	
?>