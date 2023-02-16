<?php
$first = [
    "firstName" => "Egi",
    "lastName" => "Mauludin"
];

$last = [
    "lastName" => "Mauludin",
    "firstName" => "Egi"
];

$full = $first + $last;
var_dump($full);
var_dump($first == $last);
var_dump($first === $last);
var_dump($first != $last);
var_dump($first !== $last);


echo("\n");
$array1 = [1,2];
$array2 = [3,4,5];
$array3 = $array1 + $array2;
var_dump($array3);

