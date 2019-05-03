<?php

$bestTimeInSeconds = readline();
$lengthInMeters = readline();
$timeForSwimming1MeterInSeconds = readline();
$idealTime = $lengthInMeters * $timeForSwimming1MeterInSeconds;
$realTime = $idealTime + floor($lengthInMeters / 15) * 12.5;
if ($realTime < $bestTimeInSeconds) {
    echo 'Yes, he succeeded! The new world record is ' .
        number_format($realTime, 2, '.', '') . ' seconds.';
} else {
    $secondsNotEnough = $realTime - $bestTimeInSeconds;
    echo 'No, he failed! He was ' .
        number_format($secondsNotEnough, 2, '.', '') . ' seconds slower.';
}
