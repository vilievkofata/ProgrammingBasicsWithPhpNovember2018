<?php

$fruit = readline();
$dayOfWeek = readline();
$quantity = readline();
switch ($dayOfWeek) {
    case
        $dayOfWeek == 'Monday'
        or $dayOfWeek == 'Tuesday'
        or $dayOfWeek == 'Wednesday'
        or $dayOfWeek == 'Thursday'
        or $dayOfWeek == 'Friday'
    :
        switch ($fruit) {
            case 'banana':
                $priceOf1Fruit = 2.50;
                break;
            case 'apple':
                $priceOf1Fruit = 1.20;
                break;
            case 'orange':
                $priceOf1Fruit = 0.85;
                break;
            case 'grapefruit':
                $priceOf1Fruit = 1.45;
                break;
            case 'kiwi':
                $priceOf1Fruit = 2.70;
                break;
            case 'pineapple':
                $priceOf1Fruit = 5.50;
                break;
            case 'grapes':
                $priceOf1Fruit = 3.85;
                break;
            default:
                echo 'error';
                exit();
                break;
        }
        break;
    case $dayOfWeek == 'Saturday' or $dayOfWeek == 'Sunday':
        switch ($fruit) {
            case 'banana':
                $priceOf1Fruit = 2.70;
                break;
            case 'apple':
                $priceOf1Fruit = 1.25;
                break;
            case 'orange':
                $priceOf1Fruit = 0.90;
                break;
            case 'grapefruit':
                $priceOf1Fruit = 1.60;
                break;
            case 'kiwi':
                $priceOf1Fruit = 3.00;
                break;
            case 'pineapple':
                $priceOf1Fruit = 5.60;
                break;
            case 'grapes':
                $priceOf1Fruit = 4.20;
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
$price = $priceOf1Fruit * $quantity;
echo number_format($price, 2, '.', '');
