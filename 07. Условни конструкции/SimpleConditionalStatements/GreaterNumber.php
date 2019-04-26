<?php

$firstNumber = readline();
$secondNumber = readline();
if ($firstNumber > $secondNumber) {
    $greaterNumber = $firstNumber;
} else {
    $greaterNumber = $secondNumber;
}
echo $greaterNumber;
