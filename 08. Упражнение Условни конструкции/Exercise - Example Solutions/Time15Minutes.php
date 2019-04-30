<?php

$hours = intval(readline());
$minutes = intval(readline());
$minutesPlus15 = $minutes + 15;
if ($minutesPlus15 > 59) {
    $hours++;
    $minutesPlus15 -= 60;
}
if ($hours > 23) {
    $hours -= 24;
}
if ($minutesPlus15 < 10) {
    echo $hours . ':0' . $minutesPlus15;
} else {
    echo $hours . ':' . $minutesPlus15;
}
