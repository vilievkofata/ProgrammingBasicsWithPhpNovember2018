<?php

$hourOfExam = readline();
$minutesOfExam = readline();
$hourOfArrival = readline();
$minutesOfArrival = readline();
$timeOfExam = date_create_from_format('G, i', "$hourOfExam, $minutesOfExam");
$timeOfArrival = date_create_from_format(
    'G, i',
    "$hourOfArrival, $minutesOfArrival"
);
$timeDifferenceInTimeInterval = date_diff($timeOfExam, $timeOfArrival);
$timeDifferenceInMinutes = intval(
    $timeDifferenceInTimeInterval->format('%r%h')
    ) * 60 + intval($timeDifferenceInTimeInterval->format('%r%i'));
switch ($timeDifferenceInMinutes) {
    case 0:
        echo 'On time';
        break;
    case $timeDifferenceInMinutes > 0:
        echo 'Late' . PHP_EOL;
        if (intval($timeDifferenceInTimeInterval->format('%h')) <= 0) {
            echo $timeDifferenceInTimeInterval->format('%i')
                . ' minutes after the start';
        } else {
            echo $timeDifferenceInTimeInterval->format('%h') . ':'
                . $timeDifferenceInTimeInterval->format('%I')
                . ' hours after the start';
        }
        break;
    case -30 <= $timeDifferenceInMinutes and $timeDifferenceInMinutes <= 0:
        echo 'On time' . PHP_EOL;
        echo $timeDifferenceInTimeInterval->format('%i')
            . ' minutes before the start';
        break;
    case $timeDifferenceInMinutes < -30:
        echo 'Early' . PHP_EOL;
        if (intval($timeDifferenceInTimeInterval->format('%h')) <= 0) {
            echo $timeDifferenceInTimeInterval->format('%i')
                . ' minutes before the start';
        } else {
            echo $timeDifferenceInTimeInterval->format('%h') . ':'
                . $timeDifferenceInTimeInterval->format('%I')
                . ' hours before the start';
        }
        break;
}
