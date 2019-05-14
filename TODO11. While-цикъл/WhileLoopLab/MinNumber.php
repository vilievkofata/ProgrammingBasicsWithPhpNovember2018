<?php

$numberOfNumbers = readline();
$number = readline();
$smallestNumber = $number;
for ($i = 1; $i <= $numberOfNumbers; $i++) {
    if ($number < $smallestNumber) {
        $smallestNumber = $number;
    }
    $number = readline();
}
echo $smallestNumber;
