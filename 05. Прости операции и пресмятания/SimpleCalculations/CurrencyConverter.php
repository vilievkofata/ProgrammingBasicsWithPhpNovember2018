<?php

$value = readline();
$currency = readline();
$currencyToConvertTo = readline();
switch ($currency) {
    case 'BGN':
        switch ($currencyToConvertTo) {
            case 'USD':
                $convertedValue = $value / 1.79549;
                break;
            case 'EUR':
                $convertedValue = $value / 1.95583;
                break;
            case 'GBP':
                $convertedValue = $value / 2.53405;
                break;
        }
        break;
    case 'USD':
        switch ($currencyToConvertTo) {
            case 'BGN':
                $convertedValue = $value * 1.79549;
                break;
            case 'EUR':
                $convertedValue = $value * 1.79549 / 1.95583;
                break;
            case 'GBP':
                $convertedValue = $value * 1.79549 / 2.53405;
                break;
        }
        break;
    case 'EUR':
        switch ($currencyToConvertTo) {
            case 'BGN':
                $convertedValue = $value * 1.95583;
                break;
            case 'USD':
                $convertedValue = $value * 1.95583 / 1.79549;
                break;
            case 'GBP':
                $convertedValue = $value * 1.95583 / 2.53405;
                break;
        }
        break;
    case 'GBP':
        switch ($currencyToConvertTo) {
            case 'BGN':
                $convertedValue = $value * 2.53405;
                break;
            case 'USD':
                $convertedValue = $value * 2.53405 / 1.79549;
                break;
            case 'EUR':
                $convertedValue = $value * 2.53405 / 1.95583;
                break;
        }
        break;
}
echo $convertedValue;
