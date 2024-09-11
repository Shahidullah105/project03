<?php

//echo time();

//$datestring= '2024-05-24 12:38:36';
//$timestamp=strtotime($datestring);
//echo $timestamp. "\n";
//$formatteddate=date("y -m - d H:i:s" , $timestamp);
//echo $formatteddate. "\n";

//$starttime=mktime(0,0,0,5,1,24);

//$endtime=mktime(0,0,0,5,22,24);

//$diffinsecond=$endtime-$starttime;
//echo $diffinsecond. "\n";

//$diffinday=$diffinsecond/(60*60*24);
//echo $diffinday. "\n";

//$year= 2024;
//$month= 5;
//$day=24;

//$datestring=sprintf("%d- %d- %d", $year, $month, $day);
//echo $datestring. "\n";

date_default_timezone_set('Asia/Dhaka');
$year = date('y');
$month = date('m');
$daysinmonth = date('t');

for ($day=1; $day<=$daysinmonth; $day++) {
    $datestring = sprintf( '%04d - %02d- %02d', $day, $year, $month);
    $formatteddate = date('l, F j,Y', strtotime($datestring));
    echo $formatteddate. "\n";
}


?>

