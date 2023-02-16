<?php
function factorialLoop(int $value): int {
    $total = 1;
    for ($i=1; $i <= $value; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

function factoriarecursive(int $value): int {
    if($value == 1) {
        return 1;
    } else {
        return $value * factoriarecursive($value - 1);
    }
}

var_dump(factoriarecursive(5));