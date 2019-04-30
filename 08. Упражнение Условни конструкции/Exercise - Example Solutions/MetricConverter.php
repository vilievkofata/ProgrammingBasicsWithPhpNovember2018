<?php

$value = floatval(readline());
$inputUnit = readline();
$outputUnit = readline();
$convertedValue = 0;
if ($inputUnit == 'mm') {
    $convertedValue = $value / 1000;
} elseif ($inputUnit == 'cm') {
    $convertedValue = $value / 100;
} elseif ($inputUnit == 'mi') {
    $convertedValue = $value / 0.000621371192;
} elseif ($inputUnit == 'in') {
    $convertedValue = $value / 39.3700787;
} elseif ($inputUnit == 'km') {
    $convertedValue = $value / 0.001;
} elseif ($inputUnit == 'ft') {
    $convertedValue = $value / 3.2808399;
} elseif ($inputUnit == 'yd') {
    $convertedValue = $value / 1.0936133;
} elseif ($inputUnit == 'm') {
    $convertedValue = $value;
}
if ($outputUnit == 'mm') {
    $convertedValue *= 1000;
} elseif ($outputUnit == 'cm') {
    $convertedValue *= 100;
} elseif ($outputUnit == 'mi') {
    $convertedValue *= 0.000621371192;
} elseif ($outputUnit == 'in') {
    $convertedValue *= 39.3700787;
} elseif ($outputUnit == 'km') {
    $convertedValue *= 0.001;
} elseif ($outputUnit == 'ft') {
    $convertedValue *= 3.2808399;
} elseif ($outputUnit == 'yd') {
    $convertedValue *= 1.0936133;
} elseif ($outputUnit == 'm') {
    $convertedValue *= 1;
}
printf('%.3f', $convertedValue);
