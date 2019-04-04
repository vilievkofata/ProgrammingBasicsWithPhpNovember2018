<?php
$side = readline();
for ($i = 1; $i <= $side; $i++) {
    if ($i == 1 or $i == $side) {
        for ($j = 1; $j <= $side; $j++) {
            echo '*';
        }
    } else {
        for ($j = 1; $j <= $side; $j++) {
            if ($j == 1 or $j == $side) {
                echo '*';
            } else {
                echo ' ';
            }
        }
    }
    echo PHP_EOL;
}
