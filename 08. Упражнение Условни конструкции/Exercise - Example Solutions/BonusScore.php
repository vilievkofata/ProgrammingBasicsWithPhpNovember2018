<?php

$number = intval(readline());
$bonusPoints = 0;
if ($number <= 100) {
    $bonusPoints = 5;
} elseif ($number <= 1000) {
    $bonusPoints = 0.2 * $number;
} elseif ($number > 1000) {
    $bonusPoints = 0.1 * $number;
}
if ($number % 2 == 0) {
    $bonusPoints++;
} elseif ($number % 10 == 5) {
    $bonusPoints += 2;
}
$result = $bonusPoints + $number;
echo $bonusPoints . PHP_EOL;
echo $result;
