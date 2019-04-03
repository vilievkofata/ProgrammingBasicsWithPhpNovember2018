<?php

$time1 = floatval(readline());
$time2 = floatval(readline());
$time3 = floatval(readline());
$timeFishing = floatval(readline());

$cleaningTime = 1 / (1 / $time1 + 1 / $time2 + 1 / $time3);
$timeWithRest = $cleaningTime * 1.15;

$timeLeft = abs($timeFishing - $timeWithRest);
printf("%.2f" . PHP_EOL,$timeWithRest);

if ($timeFishing > $timeWithRest) {
    echo "Yes, there is a surprise - time left -> " . floor($timeLeft) . " hours.";
} else {
    echo "No, there isn't a surprise - shortage of time -> " . ceil($timeLeft) . " hours.";
}