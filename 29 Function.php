<?php

function sayHello () {
    echo "Hello Function" . PHP_EOL;
}

sayHello();

//function in if else statement
$create = true;
if ($create) {
    function sayHello1() {
        echo "hello world";
    }
}
sayHello1();