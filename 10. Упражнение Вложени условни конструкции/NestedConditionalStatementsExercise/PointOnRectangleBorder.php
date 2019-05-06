<?php

$topLeftCornerX = readline();
$topLeftCornerY = readline();
$bottomRightCornerX = readline();
$bottomRightCornerY = readline();
$pointX = readline();
$pointY = readline();
if (
    (
        ($pointX == $topLeftCornerX or $pointX == $bottomRightCornerX)
        and ($pointY >= $topLeftCornerY and $pointY <= $bottomRightCornerY)
    )
    or (
        ($pointY == $topLeftCornerY or $pointY == $bottomRightCornerY)
        and ($pointX >= $topLeftCornerX and $pointX <= $bottomRightCornerX)
    )
) {
    echo 'Border';
} else {
    echo 'Inside / Outside';
}
