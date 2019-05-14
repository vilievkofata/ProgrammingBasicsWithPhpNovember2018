<?php

$number = readline();
while (true) {
    if (1 <= $number and $number <= 100) {
        echo "The number is: $number";
        break;
    } else {
        echo 'Invalid number!' . PHP_EOL;
        $number = readline();
    }
}
