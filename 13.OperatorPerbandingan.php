<?php
$a = 10;
$b = "10";

//Sama dengan
var_dump($a == $b);

//identik
var_dump($a === $b);

//tidak sama dengan
var_dump($a != $b);
var_dump($a <> $b);

//tidak identik
var_dump($a !== $b);


echo "\n";

var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);