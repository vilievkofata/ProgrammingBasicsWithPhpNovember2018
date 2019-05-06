<?php

$degrees = readline();
$timeOfDay = readline();
switch ($degrees) {
    case 10 <= $degrees and $degrees <= 18:
        switch ($timeOfDay) {
            case 'Morning':
                $dressWith = 'Sweatshirt';
                $shoes = 'Sneakers';
                break;
            case 'Afternoon':
                $dressWith = 'Shirt';
                $shoes = 'Moccasins';
                break;
            case 'Evening':
                $dressWith = 'Shirt';
                $shoes = 'Moccasins';
                break;
        }
        break;
    case 18 < $degrees and $degrees <= 24:
        switch ($timeOfDay) {
            case 'Morning':
                $dressWith = 'Shirt';
                $shoes = 'Moccasins';
                break;
            case 'Afternoon':
                $dressWith = 'T-Shirt';
                $shoes = 'Sandals';
                break;
            case 'Evening':
                $dressWith = 'Shirt';
                $shoes = 'Moccasins';
                break;
        }
        break;
    case $degrees >= 25:
        switch ($timeOfDay) {
            case 'Morning':
                $dressWith = 'T-Shirt';
                $shoes = 'Sandals';
                break;
            case 'Afternoon':
                $dressWith = 'Swim Suit';
                $shoes = 'Barefoot';
                break;
            case 'Evening':
                $dressWith = 'Shirt';
                $shoes = 'Moccasins';
                break;
        }
        break;
}
echo "It's $degrees degrees, get your $dressWith and $shoes.";
