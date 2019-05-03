<?php

$hours = intval(readline());
$minutes = intval(readline());


$after15minutes = $minutes + 15;

if ($after15minutes > 59) {
    $hours ++;
    $after15minutes -= 60;
}

if ($hours > 23) {
    $hours -= 24;
}

if ($after15minutes < 10) {
    echo $hours . ':0' . $after15minutes;
} else {
    echo $hours . ':' . $after15minutes;
}