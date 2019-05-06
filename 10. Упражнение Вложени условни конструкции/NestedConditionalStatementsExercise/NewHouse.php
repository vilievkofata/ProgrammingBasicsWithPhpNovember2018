<?php

$typeOfFlowers = readline();
$numberOfFlowers = readline();
$budget = readline();
switch ($typeOfFlowers) {
    case 'Roses':
        $priceWithoutDiscount = $numberOfFlowers * 5;
        if ($numberOfFlowers > 80) {
            $price = $priceWithoutDiscount - $priceWithoutDiscount * 10 / 100;
        } else {
            $price = $priceWithoutDiscount;
        }
        break;
    case 'Dahlias':
        $priceWithoutDiscount = $numberOfFlowers * 3.80;
        if ($numberOfFlowers > 90) {
            $price = $priceWithoutDiscount - $priceWithoutDiscount * 15 / 100;
        } else {
            $price = $priceWithoutDiscount;
        }
        break;
    case 'Tulips':
        $priceWithoutDiscount = $numberOfFlowers * 2.80;
        if ($numberOfFlowers > 80) {
            $price = $priceWithoutDiscount - $priceWithoutDiscount * 15 / 100;
        } else {
            $price = $priceWithoutDiscount;
        }
        break;
    case 'Narcissus':
        $priceWithoutDiscount = $numberOfFlowers * 3;
        if ($numberOfFlowers < 120) {
            $price = $priceWithoutDiscount + $priceWithoutDiscount * 15 / 100;
        } else {
            $price = $priceWithoutDiscount;
        }
        break;
    case 'Gladiolus':
        $priceWithoutDiscount = $numberOfFlowers * 2.50;
        if ($numberOfFlowers < 80) {
            $price = $priceWithoutDiscount + $priceWithoutDiscount * 20 / 100;
        } else {
            $price = $priceWithoutDiscount;
        }
        break;
}
if ($price > $budget) {
    $moneyNotEnough = $price - $budget;
    echo 'Not enough money, you need '
        . number_format($moneyNotEnough, 2, '.', '') . ' leva more.';
} else {
    $moneyLeft = $budget - $price;
    echo "Hey, you have a great garden with $numberOfFlowers $typeOfFlowers"
        . ' and ' . number_format($moneyLeft, 2, '.', '') . ' leva left.';
}
