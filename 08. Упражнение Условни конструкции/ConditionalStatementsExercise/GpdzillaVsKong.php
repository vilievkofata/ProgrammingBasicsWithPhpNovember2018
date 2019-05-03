<?php

$budget = readline();
$numberOfExtras = readline();
$clothesPricePerExtra = readline();
$decor = 10 / 100 * $budget;
$clothesPrice = $numberOfExtras * $clothesPricePerExtra;
if ($numberOfExtras > 150) {
    $clothesPrice -= $clothesPrice * 10 / 100;
}
$price = $decor + $clothesPrice;
if ($price > $budget) {
    echo 'Not enough money!' . PHP_EOL;
    $moneyNotEnough = $price - $budget;
    echo 'Wingard needs ' .
        number_format($moneyNotEnough, 2, '.', '') . ' leva more.';
} else {
    echo 'Action!' . PHP_EOL;
    $moneyLeft = $budget - $price;
    echo 'Wingard starts filming with ' .
        number_format($moneyLeft, 2, '.', '') . ' leva left.';
}
