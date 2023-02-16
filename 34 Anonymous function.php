<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Giw");
$sayHello("Gie");

function sayGoodBye (string $name, $filter) {
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Giw", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Gie", $filterFunction);

// kode mengakses varible di luar closure
// datanya tetap referensi ke yang pertama
$firstName = "Giw";
$lastName = "Mauludin";

$sayHelloGiw = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName".PHP_EOL;
};

$sayHelloGiw();