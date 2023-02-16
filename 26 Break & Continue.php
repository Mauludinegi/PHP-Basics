<?php
$a = 0;
while ($a < 100) {
    $a++;
    if($a % 2 == 0) {
        continue;
    } 
    echo "Ini bilangan ganjil {$a}".PHP_EOL;
    
    if ($a == 50) {
        break;
    }
}