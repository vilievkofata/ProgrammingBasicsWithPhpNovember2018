<?php

$speed = readline();
switch ($speed) {
    case $speed <= 10:
        echo 'slow';
        break;
    case 10 < $speed and $speed <= 50:
        echo 'average';
        break;
    case 50 < $speed and $speed <= 150:
        echo 'fast';
        break;
    case 150 < $speed and $speed <= 1000:
        echo 'ultra fast';
        break;
    case $speed > 1000:
        echo 'extremely fast';
        break;
}
