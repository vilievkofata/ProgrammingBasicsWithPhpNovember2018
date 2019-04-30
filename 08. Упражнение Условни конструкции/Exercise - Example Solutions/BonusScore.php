<?php

$score = intval(readline());
$bonus = 0;
if ($score <= 100) {
    $bonus = 5;
} elseif ($score <= 1000) {
    $bonus = 20 / 100 * $score;
} elseif ($score > 1000) {
    $bonus = 10 / 100 * $score;
}
if ($score % 2 == 0) {
    $bonus++;
} elseif ($score % 10 == 5) {
    $bonus += 2;
}
$bonusScore = $bonus + $score;
echo $bonus . PHP_EOL;
echo $bonusScore;
