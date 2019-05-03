<?php

$incomeInLeva = readline();
$averageGrade = readline();
$minimalSalary = readline();
if ($incomeInLeva < $minimalSalary and $averageGrade >= 4.5) {
    $socialScholarship = 35 / 100 * $minimalSalary;
}
if ($averageGrade >= 5.5) {
    $scholarshipForExcellentResults = $averageGrade * 25;
}
if ($socialScholarship > $scholarshipForExcellentResults) {
    echo 'You get a Social scholarship ' . floor($socialScholarship) . ' BGN';
} elseif ($scholarshipForExcellentResults > $socialScholarship) {
    echo 'You get a scholarship for excellent results ' .
        floor($scholarshipForExcellentResults) . ' BGN';
} else {
    echo 'You cannot get a scholarship!';
}
