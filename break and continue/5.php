<?php
$values = [10, -5, 20, 0, 15, -1, 100];
$total = 0;
foreach ($values as $value) {
    if ($value == -1) {
        break;
    }
    if ($value <= 0) {
        continue;
    }
    $total = $total + $value;
}
echo 'Сумма: ' . $total . PHP_EOL;