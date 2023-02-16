<?php

for ($i=1; $i <= 10; $i++) { 
    for ($j=1; $j <= 10; $j++) {
        $a = $j * $i;
        echo $j . " X " . $i . " = " . $a . PHP_EOL;
        if ($j == 10) {
            echo "\n";
        }
    }
}