<?php

$time = date_create_from_format('G', readline());
$time = date_add(
    $time,
    date_interval_create_from_date_string(readline() . ' minutes')
);
$timePlus15Minutes = date_add(
    $time,
    date_interval_create_from_date_string('+15 minutes')
);
echo date_format($timePlus15Minutes, 'G:i');
