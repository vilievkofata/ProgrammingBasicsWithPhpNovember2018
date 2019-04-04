<?php
$length = readline();
for ($i = 1; $i <= $length; $i++) {
    if ($i == 1 or $i == $length) {
        for ($j = 1; $j <= $length; $j++) {
            echo '*';
        }
    } else {
        for ($j = 1; $j <= $length; $j++) {
            if ($j == 1 or $j == $length) {
                echo '*';
            } else {
                echo ' ';
            }
        }
    }
    echo PHP_EOL;
}
