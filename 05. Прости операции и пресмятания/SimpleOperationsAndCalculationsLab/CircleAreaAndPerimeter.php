<?php
$radius = readline();
$area = pi() * $radius ** 2;
$circumference = 2 * pi() * $radius;
echo round($area, 2) . PHP_EOL;
echo round($circumference, 2) . PHP_EOL;
