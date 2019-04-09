<?php

$date = strtotime(readline());
$dateAfter1000Days = strtotime('+999 days', $date);
echo date('d-m-Y', $dateAfter1000Days);
