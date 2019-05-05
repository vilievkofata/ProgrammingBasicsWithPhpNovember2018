<?php

$product = readline();
switch ($product) {
    case
        $product == 'banana'
        or $product == 'apple'
        or $product == 'kiwi'
        or $product == 'cherry'
        or $product == 'lemon'
        or $product == 'grapes'
    :
        echo 'fruit';
        break;
    case
        $product == 'tomato'
        or $product == 'cucumber'
        or $product == 'pepper'
        or $product == 'carrot'
    :
        echo 'vegetable';
        break;
    default:
        echo 'unknown';
        break;
}
