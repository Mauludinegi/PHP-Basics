<?php

function sum(int $first, int $last) {
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100");
sum(10, 10);
sum(false, true);
// sum([], []); //error

echo "\n";
echo "variable-length Argument List".PHP_EOL;
// variable-length Argument List

//contoh yang menggunakan array
function sumAll(array $values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll([1, 2, 3, 4, 5]);

//contoh yang menggunakan variable length

function sumAll1(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$values = array(1, 2, 3, 4, 5, 6);

sumAll1(1, 2, 3, 4, 5);
sumAll1(...$values);