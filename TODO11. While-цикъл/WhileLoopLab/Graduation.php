<?php

$nameOfStudent = readline();
$numberOfPassedGrades = 1;
while ($numberOfPassedGrades <= 12) {
    $grade = readline();
    if ($grade >= 4) {
        $sumOfGrades += $grade;
        $numberOfPassedGrades++;
    }
}
$averageGrade = $sumOfGrades / 12;
echo "$nameOfStudent graduated. Average grade: "
    . number_format($averageGrade, 2, '.', '');
