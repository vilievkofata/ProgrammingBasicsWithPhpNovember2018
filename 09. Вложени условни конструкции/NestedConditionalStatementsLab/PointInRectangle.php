<?php

$topLeftCornerX = readline();
$topLeftCornerY = readline();
$bottomRightCornerX = readline();
$bottomRightCornerY = readline();
$pointX = readline();
$pointY = readline();
if (
    $pointX >= $topLeftCornerX
    and $pointX <= $bottomRightCornerX
    and $pointY >= $topLeftCornerY
    and $pointY <= $bottomRightCornerY
) {
    echo 'Inside';
} else {
    echo 'Outside';
}
