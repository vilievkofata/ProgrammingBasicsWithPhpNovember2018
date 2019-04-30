<?php

$value = readline();
$inputUnit = readline();
$outputUnit = readline();
switch ($inputUnit) {
    case 'km':
        $valueInMeters = $value * 1000;
        break;
    case 'm':
        $valueInMeters = $value;
        break;
    case 'cm':
        $valueInMeters = $value / 100;
        break;
    case 'mm':
        $valueInMeters = $value / 1000;
        break;
    case 'in':
        $valueInMeters = $value / 39.3700787;
        break;
    case 'ft':
        $valueInMeters = $value / 3.2808399;
        break;
    case 'yd':
        $valueInMeters = $value / 1.0936133;
        break;
    case 'mi':
        $valueInMeters = $value * 1609.344;
        break;
}
switch ($outputUnit) {
    case 'km':
        $valueInOutputUnit = $valueInMeters / 1000;
        break;
    case 'm':
        $valueInOutputUnit = $valueInMeters;
        break;
    case 'cm':
        $valueInOutputUnit = $valueInMeters * 100;
        break;
    case 'mm':
        $valueInOutputUnit = $valueInMeters * 1000;
        break;
    case 'in':
        $valueInOutputUnit = $valueInMeters * 39.3700787;
        break;
    case 'ft':
        $valueInOutputUnit = $valueInMeters * 3.2808399;
        break;
    case 'yd':
        $valueInOutputUnit = $valueInMeters * 1.0936133;
        break;
    case 'mi':
        $valueInOutputUnit = $valueInMeters / 1609.344;
        break;
}
echo number_format($valueInOutputUnit, 3, '.', '');
