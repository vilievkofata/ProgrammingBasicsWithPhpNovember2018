<?php

$vertexOfRectangleX = readline();
$vertexOfRectangleY = readline();
$diagonallyOppositeVertexOfRectangleX = readline();
$diagonallyOppositeVertexOfRectangleY = readline();
$length = abs($vertexOfRectangleX - $diagonallyOppositeVertexOfRectangleX);
$width = abs($vertexOfRectangleY - $diagonallyOppositeVertexOfRectangleY);
$area = $width * $length;
$perimeter = 2 * ($length + $width);
echo $area . PHP_EOL;
echo $perimeter . PHP_EOL;
