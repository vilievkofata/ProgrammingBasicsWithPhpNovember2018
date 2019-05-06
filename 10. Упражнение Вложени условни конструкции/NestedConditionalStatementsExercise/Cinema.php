<?php

$projectionType = readline();
$numberOfRows = readline();
$numberOfColumns = readline();
$seats = $numberOfRows * $numberOfColumns;
switch ($projectionType) {
    case 'Premiere':
        $price = $seats * 12.00;
        break;
    case 'Normal':
        $price = $seats * 7.50;
        break;
    case 'Discount':
        $price = $seats * 5.00;
        break;
}
echo $price;
