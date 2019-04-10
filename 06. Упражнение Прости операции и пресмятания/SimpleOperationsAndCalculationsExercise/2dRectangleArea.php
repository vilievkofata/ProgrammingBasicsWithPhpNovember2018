<?php

$vertexOfRectangleX = readline();
$vertexOfRectangleY = readline();
$diagonallyOppositeVertexOfRectangleX = readline();
$diagonallyOppositeVertexOfRectangleY = readline();
$length = abs($vertexOfRectangleX - $diagonallyOppositeVertexOfRectangleX);
$width = abs($vertexOfRectangleY - $diagonallyOppositeVertexOfRectangleY);
$area = $width * $length;
$perimeter = 2 * ($length + $width);
echo number_format($area, 2, '.', '') . PHP_EOL;
echo number_format($perimeter, 2, '.', '') . PHP_EOL;
