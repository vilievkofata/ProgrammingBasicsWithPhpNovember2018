<?php

$number = intval(readline());
$bonusPoints = 0;

if ($number <= 100) {
    $bonusPoints = 5;
} else if ($number <= 1000) {
    $bonusPoints = 0.2 * $number;
} else if ($number > 1000) {
    $bonusPoints = 0.1 * $number;
}

if ($number % 2 == 0) {
    $bonusPoints++;
} else if ($number % 10 == 5) {
    $bonusPoints += 2;
}
$result = $bonusPoints + $number;
echo $bonusPoints . PHP_EOL;
echo $result;
