<?php

$score = readline();
if ($score > 1000) {
    $bonus = $score * 10 / 100;
} elseif (100 < $score and $score <= 1000) {
    $bonus = $score * 20 / 100;
} elseif ($score <= 100) {
    $bonus = 5;
}
if ($score % 2 == 0) {
    $bonus++;
} elseif($score % 5 == 0) {
    $bonus += 2;
}
$bonusScore = $score + $bonus;
echo $bonus . PHP_EOL;
echo $bonusScore;
