<?php

$name = "Giw"; //global scope;
function sayHello() {
    $name = "Giw";  //local scope
    echo "Hello $name" . PHP_EOL;
}

sayHello();


function name() {
    global $name;   //global keyword
    echo "Hello $name" . PHP_EOL;
    echo $GLOBALS["name"] . PHP_EOL;   //GLOBALS variable
}
name();

//static scope
function increment() {
    static $counter = 1;   //static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

increment();
increment();
increment();
increment();
increment();
?>