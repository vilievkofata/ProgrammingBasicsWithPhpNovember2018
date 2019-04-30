<?php

$firstSeconds = readline();
$secondSeconds = readline();
$thirdSeconds = readline();
$seconds = $firstSeconds + $secondSeconds + $thirdSeconds;
$minutes = 0;
while ($seconds >= 60) {
    if ($seconds >= 60) {
        $seconds -= 60;
        $minutes++;
    }
}
echo "$minutes:" . str_pad($seconds, 2, '0', STR_PAD_LEFT);
