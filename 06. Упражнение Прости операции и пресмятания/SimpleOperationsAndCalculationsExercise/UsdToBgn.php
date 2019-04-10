<?php

$usd = readline();
$usdToBgnRate = 1.79549;
$bgn = $usd * $usdToBgnRate;
echo round($bgn, 2);
