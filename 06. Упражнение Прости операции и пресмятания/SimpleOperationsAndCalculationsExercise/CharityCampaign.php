<?php

$durationOfCampaignInDays = readline();
$numberOfConfectioners = readline();
$numberOfCakes = readline();
$numberOfWafers = readline();
$numberOfPancakes = readline();
$priceOfCakes = $numberOfCakes * 45;
$priceOfWafers = $numberOfWafers * 5.80;
$priceOfPancakes = $numberOfPancakes * 3.20;
$priceOfConfections = $priceOfCakes + $priceOfWafers + $priceOfPancakes;
$priceOfCampaign = $priceOfConfections * $numberOfConfectioners
    * $durationOfCampaignInDays;
$profitOfCampaign = $priceOfCampaign - 1 / 8 * $priceOfCampaign;
echo number_format($profitOfCampaign, 2, '.', '');
