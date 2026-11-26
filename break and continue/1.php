<?php
$numbers = [12, 7, 25, -3, 18,4];
foreach ($numbers as $number) {
    if ($number < 0) {
        break;
    }
    echo $number . PHP_EOL;
}