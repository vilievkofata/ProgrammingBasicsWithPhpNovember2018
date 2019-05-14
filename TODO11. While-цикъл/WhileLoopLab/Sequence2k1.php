<?php

$number = readline();
$nextInLine = 1;
while ($nextInLine <= $number) {
    echo $nextInLine . PHP_EOL;
    $nextInLine = $nextInLine * 2 + 1;
}
