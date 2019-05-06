<?php

$firstNumber = readline();
$secondNumber = readline();
$operator = readline();
switch ($operator) {
    case '+':
        $result = $firstNumber + $secondNumber;
        if ($result % 2 == 0) {
            $evenOrOdd = 'even';
        } else {
            $evenOrOdd = 'odd';
        }
        echo "$firstNumber $operator $secondNumber = $result - $evenOrOdd";
        break;
    case '-':
        $result = $firstNumber - $secondNumber;
        if ($result % 2 == 0) {
            $evenOrOdd = 'even';
        } else {
            $evenOrOdd = 'odd';
        }
        echo "$firstNumber $operator $secondNumber = $result - $evenOrOdd";
        break;
    case '*':
        $result = $firstNumber * $secondNumber;
        if ($result % 2 == 0) {
            $evenOrOdd = 'even';
        } else {
            $evenOrOdd = 'odd';
        }
        echo "$firstNumber $operator $secondNumber = $result - $evenOrOdd";
        break;
    case '/':
        if ($secondNumber == 0) {
            echo "Cannot divide $firstNumber by zero";
        } else {
            $result = $firstNumber / $secondNumber;
            echo "$firstNumber / $secondNumber = "
                . number_format($result, 2, '.', '');
        }
        break;
    case '%':
        if ($secondNumber == 0) {
            echo "Cannot divide $firstNumber by zero";
        } else {
            $result = $firstNumber % $secondNumber;
            echo "$firstNumber % $secondNumber = $result";
        }
        break;
}
