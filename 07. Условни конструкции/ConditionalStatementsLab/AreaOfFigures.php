<?php

$figure = readline();
switch ($figure) {
    case 'square':
        $side = readline();
        $area = $side ** 2;
        break;
    case 'rectangle':
        $length = readline();
        $width = readline();
        $area = $width * $length;
        break;
    case 'circle':
        $radius = readline();
        $area = pi() * $radius ** 2;
        break;
    case 'triangle':
        $base = readline();
        $height = readline();
        $area = $height * $base / 2;
        break;
}
echo $area;
