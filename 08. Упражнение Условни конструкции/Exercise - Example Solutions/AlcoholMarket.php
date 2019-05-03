<?php

$whiskeyPrice = floatval(readline());
$beer = floatval(readline());
$wine = floatval(readline());
$rakia = floatval(readline());
$whiskey = floatval(readline());

$rakiaPrice = $whiskeyPrice / 2;
$winePrice = $rakiaPrice * 0.6;
$beerPrice = $rakiaPrice * 0.2;

$whiskeyTotal = $whiskeyPrice * $whiskey;
$beerTotal = $beer * $beerPrice;
$rakiaTotal = $rakia * $rakiaPrice;
$wineTotal = $wine * $winePrice;

$total = $wineTotal + $rakiaTotal + $beerTotal + $whiskeyTotal;
printf("%.2f", $total);


