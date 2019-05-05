<?php

$days = readline();
$roomType = readline();
$experience = readline();
$days--;
switch ($roomType) {
    case 'room for one person':
        switch ($days) {
            case $days < 10:
                $discountInPercent = 0;
                break;
            case 10 <= $days and $days <= 15:
                $discountInPercent = 0;
                break;
            case $days > 15:
                $discountInPercent = 0;
                break;
        }
        $pricePerNight = 18.00;
        break;
    case 'apartment':
        switch ($days) {
            case $days < 10:
                $discountInPercent = 30;
                break;
            case 10 <= $days and $days <= 15:
                $discountInPercent = 35;
                break;
            case $days > 15:
                $discountInPercent = 50;
                break;
        }
        $pricePerNight = 25.00;
        break;
    case 'president apartment':
        switch ($days) {
            case $days < 10:
                $discountInPercent = 10;
                break;
            case 10 <= $days and $days <= 15:
                $discountInPercent = 15;
                break;
            case $days > 15:
                $discountInPercent = 20;
                break;
        }
        $pricePerNight = 35.00;
        break;
}
$totalPriceWithoutDiscountAndExperience = $pricePerNight * $days;
$discount = $totalPriceWithoutDiscountAndExperience * $discountInPercent / 100;
$totalPriceWithoutExperience = $totalPriceWithoutDiscountAndExperience
    - $discount;
if ($experience == 'positive') {
    $totalPrice = $totalPriceWithoutExperience + $totalPriceWithoutExperience
        * 25 / 100;
} else {
    $totalPrice = $totalPriceWithoutExperience - $totalPriceWithoutExperience
        * 10 / 100;
}
echo number_format($totalPrice, 2, '.', '');
