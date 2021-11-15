<?php
$presentTime = new DateTime;
$destinationTime = new DateTime('1988-11-21 05:00');
echo 'Present time: ' . $presentTime->format('M d Y - A h:i').'<br>';
echo 'Destination time: ' . $destinationTime->format('M d Y - A h:i').'<br>';

$intervalTime = $presentTime->diff($destinationTime);
echo 'Interval time: ' . $intervalTime->format('%Y years %m months %d days %h hours %i minutes').'<br>';


$presentTimestamp = $presentTime->getTimestamp();
$destinationTimestamp = $destinationTime->getTimestamp();
$totalTimestamp = $presentTimestamp - $destinationTimestamp;
$totalMinutes = $totalTimestamp/60;
$neededFuel = $totalMinutes/1000;
echo 'Needed fuel volume: ' . $neededFuel . ' L';
