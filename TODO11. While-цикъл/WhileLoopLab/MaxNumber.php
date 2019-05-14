<?php

$numberOfNumbers = readline();
$number = readline();
$biggestNumber = $number;
for ($i = 1; $i <= $numberOfNumbers; $i++) {
    if ($number > $biggestNumber) {
        $biggestNumber = $number;
    }
    $number = readline();
}
echo $biggestNumber;
