<?php

$number = readline();
if ($number < 100) {
    echo 'Less than 100';
} elseif (100 <= $number and $number <= 200) {
    echo 'Between 100 and 200';
} elseif ($number > 200) {
    echo 'Greater than 200';
}
