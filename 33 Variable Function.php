<?php
function foo() {
    echo "Foo";
}

function bar() {
    echo "Bar".PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction (String $name): string {
    return "sample $name";
}

sayHello("giw", "sampleFunction");
sayHello("Egi", "strtoupper");