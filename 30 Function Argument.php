<?php
function sayHello ($name) {
    echo "hello {$name}" . PHP_EOL;
}

sayHello("Giw");

//default Argument Value

function sayHello1 ($firstname = "Anonymous", $lastname = "") {
    echo "hello $firstname $lastname" . PHP_EOL;
}

sayHello1("giw");
sayHello1();