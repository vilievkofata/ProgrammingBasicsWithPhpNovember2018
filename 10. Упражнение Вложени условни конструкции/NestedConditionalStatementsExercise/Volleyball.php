<?php

$yearType = readline();
$numberOfCelebrationDays = readline();
$numberOfWeekendsToHomeTown = readline();
$regularGamesInSofia = (48 - $numberOfWeekendsToHomeTown) * 3 / 4;
$gamesInHomeTown = $numberOfWeekendsToHomeTown;
$celebrationDaysGamesInSofia = $numberOfCelebrationDays * 2 / 3;
$allGamesWithoutYearType = $regularGamesInSofia + $gamesInHomeTown
    + $celebrationDaysGamesInSofia;
if ($yearType == 'leap') {
    $allGames = $allGamesWithoutYearType + $allGamesWithoutYearType * 15 / 100;
} else {
    $allGames = $allGamesWithoutYearType;
}
echo floor($allGames);
