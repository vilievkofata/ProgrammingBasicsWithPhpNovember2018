<?php

$budget = readline();
$season = readline();
$numberOfPeople = readline();
switch ($season) {
    case 'Spring':
        $shipCostWithoutDiscounts = 3000;
        break;
    case 'Summer':
        $shipCostWithoutDiscounts = 4200;
        break;
    case 'Autumn':
        $shipCostWithoutDiscounts = 4200;
        break;
    case 'Winter':
        $shipCostWithoutDiscounts = 2600;
        break;
}
switch ($numberOfPeople) {
    case $numberOfPeople <= 6:
        $quantityDiscountInPercent = 10;
        break;
    case 7 <= $numberOfPeople and $numberOfPeople <= 11:
        $quantityDiscountInPercent = 15;
        break;
    case $numberOfPeople >= 12:
        $quantityDiscountInPercent = 25;
        break;
}
$shipCostWithoutDiscount = $shipCostWithoutDiscounts
    - $shipCostWithoutDiscounts * $quantityDiscountInPercent / 100;
if ($numberOfPeople % 2 == 0 and $season != 'Autumn') {
    $shipCost = $shipCostWithoutDiscount - $shipCostWithoutDiscount * 5 / 100;
} else {
    $shipCost = $shipCostWithoutDiscount;
}
if ($shipCost > $budget) {
    $moneyNotEnough = $shipCost - $budget;
    echo 'Not enough money! You need '
        . number_format($moneyNotEnough, 2, '.', '') . ' leva.';
} else {
    $moneyLeft = $budget - $shipCost;
    echo 'Yes! You have ' . number_format($moneyLeft, 2, '.', '')
        . ' leva left.';
}
