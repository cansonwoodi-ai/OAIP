<?php
$prices = [100, 0, 250, -50, 400, 0, 150];
$total = 0;
foreach ($prices as $price) {
    if ($price <=0) {
        continue;

    }
    $total = $price + $total;
}
echo ($total);