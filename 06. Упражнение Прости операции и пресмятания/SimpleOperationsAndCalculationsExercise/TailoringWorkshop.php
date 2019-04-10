<?php

$numberOfTables = readline();
$lengthOfRectangularTable = readline();
$widthOfRectangularTable = readline();
$tableclothArea = (0.3 + $lengthOfRectangularTable + 0.3) * (0.3
        + $widthOfRectangularTable + 0.3);
$tableCoverArea = ($lengthOfRectangularTable / 2) ** 2;
$tableclothsPrice = $tableclothArea * 7 * $numberOfTables;
$tableCoversPrice = $tableCoverArea * 9 * $numberOfTables;
$price = $tableclothsPrice + $tableCoversPrice;
$priceInBgn = $price * 1.85;
echo number_format($price, 2, '.', '') . ' USD' . PHP_EOL;
echo number_format($priceInBgn, 2, '.', '') . ' BGN' . PHP_EOL;
