<?php

$budget = readline();
$season = readline();
switch ($budget) {
    case $budget <= 100:
        $place = 'Bulgaria';
        switch ($season) {
            case 'summer':
                $accommodation = 'Camp';
                $price = 30 / 100 * $budget;
                break;
            case 'winter':
                $accommodation = 'Hotel';
                $price = 70 / 100 * $budget;
                break;
        }
        break;
    case $budget <= 1000:
        $place = 'Balkans';
        switch ($season) {
            case 'summer':
                $accommodation = 'Camp';
                $price = 40 / 100 * $budget;
                break;
            case 'winter':
                $accommodation = 'Hotel';
                $price = 80 / 100 * $budget;
                break;
        }
        break;
    case $budget > 1000:
        $place = 'Europe';
        switch ($season) {
            case 'summer':
                $accommodation = 'Hotel';
                $price = 90 / 100 * $budget;
                break;
            case 'winter':
                $accommodation = 'Hotel';
                $price = 90 / 100 * $budget;
                break;
        }
        break;
}
echo "Somewhere in $place" . PHP_EOL;
echo "$accommodation - " . number_format($price, 2, '.', '');
