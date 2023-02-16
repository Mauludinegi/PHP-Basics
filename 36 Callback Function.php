<?php
function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Giw", "strtoupper");
sayHello("Giw", "strtolower");

sayHello("GIW", function ($name): string {
    return strtolower($name);
});

sayHello("giw", fn(string $name) => strtoupper($name));
