<?php

$number = readline();
$oneDigit = array(
    'zero',
    'one',
    'two',
    'three',
    'four',
    'five',
    'six',
    'seven',
    'eight',
    'nine'
);
$oneAndTwoDigits = array(
    'ten',
    'eleven',
    'twelve',
    'thirteen',
    'fourteen',
    'fifteen',
    'sixteen',
    'seventeen',
    'eighteen',
    'nineteen'
);
$twoDigits = array(
    '',
    '',
    'twenty',
    'thirty',
    'forty',
    'fifty',
    'sixty',
    'seventy',
    'eighty',
    'ninety'
);
$threeDigits = 'hundred';
switch (strlen($number)) {
    case 1 and 0 <= $number and $number <= 9:
        echo $oneDigit[$number[0]];
        break;
    case 2 and 10 <= $number and $number <= 99:
        switch ($number) {
            case $number <= 19:
                echo $oneAndTwoDigits[$number[1]];
                break;
            case $number > 19:
                if ($number[1] == 0) {
                    echo $twoDigits[$number[0]];
                } else {
                    echo $twoDigits[$number[0]] . ' ' . $oneDigit[$number[1]];
                }
                break;
        }
        break;
    case 3 and 100 <= $number and $number <= 100:
        echo $oneDigit[$number[0]] . ' ' . $threeDigits;
        break;
    default:
        echo 'invalid number';
        break;
}
