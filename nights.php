<?php
$checkin = $_GET['checkin'];
$checkout = $_GET['checkout'];
// $pieces = explode(" - ", $reservation);
// $range1=$pieces[0];
// $range2=$pieces[1];
$time = strtotime($checkin);
$newformat = date('Y-m-d',$time);
$datetimeStr = $newformat;
$datetime = strtotime($datetimeStr);
$time2 = strtotime($checkout);
$newformat2 = date('Y-m-d',$time2);
$datetimeStr2 = $newformat2;
$datetime2 = strtotime($datetimeStr2);

$dif = $datetime2 - $datetime;
$sec = 86400;
$day = $dif / $sec;
echo ($day);

?>