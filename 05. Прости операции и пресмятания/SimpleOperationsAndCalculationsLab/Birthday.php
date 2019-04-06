<?php

$aquariumLength = readline();
$aquariumWidth = readline();
$aquariumHeight = readline();
$percentageOfAquariumVolumeNotWater = readline();
$aquariumVolume = $aquariumLength * $aquariumWidth * $aquariumHeight;
$volumeOfWater = $aquariumVolume - $aquariumVolume
    * $percentageOfAquariumVolumeNotWater / 100;
$volumeOfWaterInLiters = $volumeOfWater / 1000;
echo number_format($volumeOfWaterInLiters, 3, '.', '');
