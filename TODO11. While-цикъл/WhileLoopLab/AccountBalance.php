<?php

$numberOfOperations = readline();
for ($i = 1; $i <= $numberOfOperations; $i++) {
    $amount = readline();
    if ($amount < 0) {
        echo 'Invalid operation!' . PHP_EOL;
        break;
    } else {
        $total += $amount;
        echo 'Increase: ' . number_format($amount, 2, '.', '') . PHP_EOL;
    }
}
echo "Total: $total";
