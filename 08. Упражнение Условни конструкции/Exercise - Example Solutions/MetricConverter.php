<?php

$number = floatval(readline());
$inputMetric = readline();
$outputMetric = readline();
$converted = 0;

if ($inputMetric == 'mm') {
    $converted = $number / 1000;
} else if ($inputMetric == 'cm') {
    $converted = $number / 100;
} else if ($inputMetric == 'mi') {
    $converted = $number / 0.000621371192;
} else if ($inputMetric == 'in') {
    $converted = $number / 39.3700787;
} else if ($inputMetric == 'km') {
    $converted = $number / 0.001;
} else if ($inputMetric == 'ft') {
    $converted = $number / 3.2808399;
} else if ($inputMetric == 'yd') {
    $converted = $number / 1.0936133;
}else if($inputMetric == 'm'){
    $converted = $number;
}

if ($outputMetric == 'mm') {
    $converted *= 1000;
} else if ($outputMetric == 'cm') {
    $converted *= 100;
} else if ($outputMetric == 'mi') {
    $converted *= 0.000621371192;
} else if ($outputMetric == 'in') {
    $converted *= 39.3700787;
} else if ($outputMetric == 'km') {
    $converted *= 0.001;
} else if ($outputMetric == 'ft') {
    $converted *= 3.2808399;
} else if ($outputMetric == 'yd') {
    $converted *= 1.0936133;
} else if($outputMetric == 'm') {
    $converted *= 1;
}

printf("%.8f",$converted);