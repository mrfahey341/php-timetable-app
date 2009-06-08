<?php
require("config.php");

require("timevariables.php");

$holidaydate=0; 
$hdatestxtFolder="holidays/";
$hdatestxtfile="dates.txt";


$holidaylines=array_map("trim",file($hdatestxtFolder.$hdatestxtfile));
sort($holidaylines);

if ((in_array($tomorrowsdate, $holidaylines)) && (in_array($yesterdaysdate, $holidaylines)) && (in_array($todaysdate, $holidaylines))) {
echo "<br>holiday today, yesterday and tomorrow";
require("outboundhall.php"); //done
}

elseif ((in_array($todaysdate, $holidaylines)) && (in_array($yesterdaysdate, $holidaylines))) {
// holiday today and yesterday (but not tomorrow)
require("outboundhtodayyesterday.php"); //done
}

elseif ((in_array($todaysdate, $holidaylines)) && (in_array($tomorrowsdate, $holidaylines))) {
// holiday today and tomorrow (but not yesterday)
require("outboundhtodaytomorrow.php"); //done
}

elseif ((in_array($tomorrowsdate, $holidaylines)) && (in_array($yesterdaysdate, $holidaylines))) {
// holiday yesterday and tomorrow (but not today)
require("outboundhyesterdaytomorrow.php"); //done
}

elseif (in_array($todaysdate, $holidaylines)) {
// holiday today! (but not tomorrow or yesterday)
require("outboundhtoday.php"); //done
}

elseif (in_array($tomorrowsdate, $holidaylines)) {
// holiday tomorrow (but not today, or yesterday)
require("outboundhtomorrow.php"); //done
   			
} elseif (in_array($yesterdaysdate, $holidaylines)) {
// holiday yesterday (but not today, or tomorrow)
require("outboundhyesterday.php"); //done

} else {
			
// it's just a regular day  
require("outbound.php");
require("inbound.php");

}

if (in_array($todaysdate, $holidaylines)) {
$daycalcexplanation = $holidaytimetableusedtext;
} else {
$daycalcexplanation = $regulartimetableusedtext . $dateused;
}


?>
