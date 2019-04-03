<?php

$time1 = intval(readline());
$time2 = intval(readline());
$time3 = intval(readline());

$totalTime = $time1 + $time2 + $time3;

$seconds = $totalTime % 60;
$minutes =floor($totalTime/60);

if($seconds < 10){
    echo $minutes . ':0' . $seconds;
} else {
    echo $minutes . ':' . $seconds;
}