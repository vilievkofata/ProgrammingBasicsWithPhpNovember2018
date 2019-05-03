<?php

$number = floatval(readline());
$inputMetric = readline();
$outputMetric = readline();
$converted = 0;
if ($inputMetric == 'mm') {
    $converted = $number / 1000;
} elseif ($inputMetric == 'cm') {
    $converted = $number / 100;
} elseif ($inputMetric == 'mi') {
    $converted = $number / 0.000621371192;
} elseif ($inputMetric == 'in') {
    $converted = $number / 39.3700787;
} elseif ($inputMetric == 'km') {
    $converted = $number / 0.001;
} elseif ($inputMetric == 'ft') {
    $converted = $number / 3.2808399;
} elseif ($inputMetric == 'yd') {
    $converted = $number / 1.0936133;
} elseif ($inputMetric == 'm') {
    $converted = $number;
}
if ($outputMetric == 'mm') {
    $converted *= 1000;
} elseif ($outputMetric == 'cm') {
    $converted *= 100;
} elseif ($outputMetric == 'mi') {
    $converted *= 0.000621371192;
} elseif ($outputMetric == 'in') {
    $converted *= 39.3700787;
} elseif ($outputMetric == 'km') {
    $converted *= 0.001;
} elseif ($outputMetric == 'ft') {
    $converted *= 3.2808399;
} elseif ($outputMetric == 'yd') {
    $converted *= 1.0936133;
} elseif ($outputMetric == 'm') {
    $converted *= 1;
}
printf('%.8f', $converted);
