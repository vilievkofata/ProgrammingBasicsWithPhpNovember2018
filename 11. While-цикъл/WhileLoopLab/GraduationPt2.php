<?php

$nameOfStudent = readline();
$numberOfPassedGrades = 1;
$numberOfFailedGrades = 0;
while ($numberOfPassedGrades <= 12) {
    $grade = readline();
    if ($grade >= 4) {
        $sumOfGrades += $grade;
        $numberOfPassedGrades++;
    } else {
        $numberOfFailedGrades++;
    }
    if ($numberOfFailedGrades >= 2) {
        echo "$nameOfStudent has been excluded at $numberOfPassedGrades grade";
        exit();
    }
}
$averageGrade = $sumOfGrades / 12;
echo "$nameOfStudent graduated. Average grade: "
    . number_format($averageGrade, 2, '.', '');
