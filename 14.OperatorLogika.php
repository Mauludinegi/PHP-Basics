<?php
$a = 10;
$b = '10';

//true jika $a dan $b true
var_dump($a && $b);
var_dump($a and $b);

//true jika $a dan $b salah satu atau keduanya true
var_dump($a || $b);
var_dump($a or $b);

//true jika $a bernilai false 
var_dump(!$a);

//true jika $a dan $b salah satu true, tapi tidak keduanya
var_dump($a xor $b);

echo "\n";
var_dump(true && true);
var_dump(true && false);

echo  "\n";
var_dump(true || false);

echo "\n";
var_dump(true xor true);
var_dump(false xor false);

echo "\n";
var_dump(!true);
