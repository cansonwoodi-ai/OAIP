<?php

function calculator($a, $b, $operation) {
    switch ($operation) {
        case "+":
            $result = $a + $b;
            break;

        case "-":
            $result = $a - $b;
            break;

        case "*":
            $result = $a * $b;
            break;

        case "/":
            if ($b == 0) {
                echo "Ошибка: нельзя делить на ноль";
                return;
            }

            $result = $a / $b;
            break;

        case "**":
            $result = $a ** $b;
            break;

        default:
            echo "Ошибка: данная операция не поддерживается";
            return;
    }

    echo "Результат: " . $result;
}

echo "1. ";
calculator(2, 2, "+");
echo PHP_EOL;

echo "2. ";
calculator(2, 2, "-");
echo PHP_EOL;

echo "3. ";
calculator(2, 2, "*");
echo PHP_EOL;

echo "4. ";
calculator(2, 2, "/");
echo PHP_EOL;

echo "5. ";
calculator(2, 2, "**");
echo PHP_EOL;