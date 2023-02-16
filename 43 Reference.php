<?php
$name = "Giw";

$otherName = &$name; //reference ke variable $name

$otherName = "Gie";
echo $name . PHP_EOL;

//Pass By Reference
function increment(int &$value) {
    $value++;
}

$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

//Returning References
function &getValue() {
    static $value = 100;
    return $value;
}

$a = & getValue();
$a = 200;

$b = & getValue();
echo $b . PHP_EOL;