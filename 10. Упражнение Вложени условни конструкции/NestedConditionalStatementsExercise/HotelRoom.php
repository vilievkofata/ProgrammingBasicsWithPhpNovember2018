<?php

$month = readline();
$days = readline();
switch ($month) {
    case $month == 'May' or $month == 'October':
        $studioPricePerDay = 50;
        $apartmentPricePerDay = 65;
        if ($days > 14) {
            $studioDiscountInPercent = 30;
            $apartmentDiscountInPercent = 10;
        } elseif ($days > 7) {
            $studioDiscountInPercent = 5;
        }
        break;
    case $month == 'June' or $month == 'September':
        $studioPricePerDay = 75.20;
        $apartmentPricePerDay = 68.70;
        if ($days > 14) {
            $studioDiscountInPercent = 20;
            $apartmentDiscountInPercent = 10;
        }
        break;
    case $month == 'July' or $month == 'August':
        $studioPricePerDay = 76;
        $apartmentPricePerDay = 77;
        if ($days > 14) {
            $apartmentDiscountInPercent = 10;
        }
        break;
}
$studioPriceWithoutDiscount = $studioPricePerDay * $days;
$apartmentPriceWithoutDiscount = $apartmentPricePerDay * $days;
$studioPrice = $studioPriceWithoutDiscount - $studioPriceWithoutDiscount
    * $studioDiscountInPercent / 100;
$apartmentPrice = $apartmentPriceWithoutDiscount
    - $apartmentPriceWithoutDiscount * $apartmentDiscountInPercent / 100;
echo 'Apartment: ' . number_format($apartmentPrice, 2, '.', '') . ' lv.'
    . PHP_EOL;
echo 'Studio: ' . number_format($studioPrice, 2, '.', '') . ' lv.';
