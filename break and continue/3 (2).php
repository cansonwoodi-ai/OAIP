<?php
$names = ['Анна', 'Олег', 'Мария', 'Игорь', 'Мария'];
$searchname = 'Мария';

$found = false;

foreach ($names as $name) {
    if ($name === $searchname) {
        $found = true;
        break;
    }
}

if ($found) {
    echo 'Имя найдено' . PHP_EOL;
} else {
    echo 'Имя не найдено' . PHP_EOL;
}