<?php

$pricePerLiterWhisky = readline();
$litersOfBeer = readline();
$litersOfWine = readline();
$litersOfFruitBrandy = readline();
$litersOfWhisky = readline();
$pricePerLiterFruitBrandy = $pricePerLiterWhisky / 2;
$pricePerLiterBeer = $pricePerLiterFruitBrandy - $pricePerLiterFruitBrandy * 80
    / 100;
$pricePerLiterWine = $pricePerLiterFruitBrandy - $pricePerLiterFruitBrandy * 40
    / 100;
$price = ($litersOfBeer * $pricePerLiterBeer) + ($litersOfWine
        * $pricePerLiterWine) + ($litersOfFruitBrandy
        * $pricePerLiterFruitBrandy) + ($litersOfWhisky
        * $pricePerLiterWhisky);
echo number_format($price, 2, '.', '');
