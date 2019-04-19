<?php

$priceOfExcursion = readline();
$numberOfPuzzles = readline();
$numberOfSpeakingDolls = readline();
$numberOfTeddyBears = readline();
$numberOfMinions = readline();
$numberOfTrucks = readline();
$numberOfToys = $numberOfPuzzles + $numberOfSpeakingDolls + $numberOfTeddyBears
    + $numberOfMinions + $numberOfTrucks;
$priceOfPuzzles = 2.60 * $numberOfPuzzles;
$priceOfSpeakingDolls = 3.00 * $numberOfSpeakingDolls;
$priceOfTeddyBears = 4.10 * $numberOfTeddyBears;
$priceOfMinions = 8.20 * $numberOfMinions;
$priceOfTrucks = 2.00 * $numberOfTrucks;
$priceBeforeDiscount = $priceOfPuzzles + $priceOfSpeakingDolls
    + $priceOfTeddyBears + $priceOfMinions + $priceOfTrucks;
if ($numberOfToys >= 50) {
    $priceAfterDiscount = $priceBeforeDiscount - $priceBeforeDiscount * 25
        / 100;
} else {
    $priceAfterDiscount = $priceBeforeDiscount;
}
$profit = $priceAfterDiscount - $priceAfterDiscount * 10 / 100;
if ($profit >= $priceOfExcursion) {
    $moneyLeft = $profit - $priceOfExcursion;
    echo 'Yes! ' . number_format($moneyLeft, 2, '.', '') . ' lv left.';
} else {
    $notEnoughMoney = $priceOfExcursion - $profit;
    echo 'Not enough money! ' . number_format($notEnoughMoney, 2, '.', '')
        . ' lv needed.';
}
