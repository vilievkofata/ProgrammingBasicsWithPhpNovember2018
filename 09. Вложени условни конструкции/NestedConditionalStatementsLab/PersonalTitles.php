<?php

$age = intval(readline());
$gender = readline();
switch ($age) {
    case $age < 16:
        switch ($gender) {
            case 'm':
                echo 'Master';
                break;
            case 'f':
                echo 'Miss';
                break;
        }
        break;
    case $age >= 16:
        switch ($gender) {
            case 'm':
                echo 'Mr.';
                break;
            case 'f':
                echo 'Ms.';
                break;
        }
        break;
}
