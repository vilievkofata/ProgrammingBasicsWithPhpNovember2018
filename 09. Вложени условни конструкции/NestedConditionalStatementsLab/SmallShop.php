<?php

$product = readline();
$city = readline();
$quantity = readline();
switch ($city) {
    case 'Sofia':
        switch ($product) {
            case 'coffee':
                $priceOf1Product = 0.50;
                break;
            case 'water':
                $priceOf1Product = 0.80;
                break;
            case 'beer':
                $priceOf1Product = 1.20;
                break;
            case 'sweets':
                $priceOf1Product = 1.45;
                break;
            case 'peanuts':
                $priceOf1Product = 1.60;
                break;
        }
        break;
    case 'Plovdiv':
        switch ($product) {
            case 'coffee':
                $priceOf1Product = 0.40;
                break;
            case 'water':
                $priceOf1Product = 0.70;
                break;
            case 'beer':
                $priceOf1Product = 1.15;
                break;
            case 'sweets':
                $priceOf1Product = 1.30;
                break;
            case 'peanuts':
                $priceOf1Product = 1.50;
                break;
        }
        break;
    case 'Varna':
        switch ($product) {
            case 'coffee':
                $priceOf1Product = 0.45;
                break;
            case 'water':
                $priceOf1Product = 0.70;
                break;
            case 'beer':
                $priceOf1Product = 1.10;
                break;
            case 'sweets':
                $priceOf1Product = 1.35;
                break;
            case 'peanuts':
                $priceOf1Product = 1.55;
                break;
        }
        break;
}
$price = $priceOf1Product * $quantity;
echo $price;
