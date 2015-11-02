<?php
$fmt = 'Y-m-d H:i:s';
$start = '2015-10-11 23:00:01';
$starto = new DateTime($start);
$end = '2015-10-11 23:48:32';
$endo = new DateTime($end);
$interval = $endo->diff($starto);

var_dump($interval);
$hour = $interval->format('%h');
$min = $interval->format('%i');
$sec = $interval->format('%s');

echo "$hour $min $sec\n";
$sec = $endo->getTimestamp() - $starto->getTimestamp();


echo "$start - $end\n";

echo date($fmt, strtotime($start)+$sec), "\n";

