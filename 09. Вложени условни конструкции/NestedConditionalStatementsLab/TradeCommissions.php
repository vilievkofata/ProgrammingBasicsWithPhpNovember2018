<?php

$city = readline();
$sales = readline();
switch ($city) {
    case 'Sofia':
        switch ($sales) {
            case 0 <= $sales and $sales <= 500:
                $commissionInPercent = 5;
                break;
            case 500 < $sales and $sales <= 1000:
                $commissionInPercent = 7;
                break;
            case 1000 < $sales and $sales <= 10000:
                $commissionInPercent = 8;
                break;
            case $sales > 10000:
                $commissionInPercent = 12;
                break;
            default:
                echo 'error';
                break;
        }
        break;
    case 'Varna':
        switch ($sales) {
            case 0 <= $sales and $sales <= 500:
                $commissionInPercent = 4.5;
                break;
            case 500 < $sales and $sales <= 1000:
                $commissionInPercent = 7.5;
                break;
            case 1000 < $sales and $sales <= 10000:
                $commissionInPercent = 10;
                break;
            case $sales > 10000:
                $commissionInPercent = 13;
                break;
            default:
                echo 'error';
                exit();
                break;
        }
        break;
    case 'Plovdiv':
        switch ($sales) {
            case 0 <= $sales and $sales <= 500:
                $commissionInPercent = 5.5;
                break;
            case 500 < $sales and $sales <= 1000:
                $commissionInPercent = 8;
                break;
            case 1000 < $sales and $sales <= 10000:
                $commissionInPercent = 12;
                break;
            case $sales > 10000:
                $commissionInPercent = 14.5;
                break;
            default:
                echo 'error';
                exit();
                break;
        }
        break;
    default:
        echo 'error';
        exit();
        break;
}
$commission = $sales * $commissionInPercent / 100;
echo number_format($commission, 2, '.', '');
