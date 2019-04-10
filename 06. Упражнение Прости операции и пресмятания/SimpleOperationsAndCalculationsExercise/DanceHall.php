<?php

$lengthOfHall = readline();
$widthOfHall = readline();
$sideOfWardrobe = readline();
$hallArea = $lengthOfHall * $widthOfHall;
$wardrobeArea = $sideOfWardrobe ** 2;
$benchArea = $hallArea / 10;
$hallFreeSpaceArea = $hallArea - $wardrobeArea - $benchArea;
$capacityOfDancers = $hallFreeSpaceArea / ((40 / 10000) + (7000 / 10000));
echo floor($capacityOfDancers);
