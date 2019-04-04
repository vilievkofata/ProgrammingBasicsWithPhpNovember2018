<?php
$aBase = readline();
$bBase = readline();
$height = readline();
$area = ($aBase + $bBase) / 2 * $height;
echo number_format($area, 2, '.', '');
