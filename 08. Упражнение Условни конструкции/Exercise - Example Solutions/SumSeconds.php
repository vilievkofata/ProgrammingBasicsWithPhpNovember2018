<?php

$firstTime = readline();
$secondTime = readline();
$thirdTime = readline();
$sumSeconds = $firstTime + $secondTime + $thirdTime;
$seconds = $sumSeconds % 60;
$minutes = floor($sumSeconds / 60);
if ($seconds < 10) {
    echo $minutes . ':0' . $seconds;
} else {
    echo $minutes . ':' . $seconds;
}
