<?php
$person = [
    "id" => "A21",
    "name" => "Egi",
    "age" => 19,
    "address" => [
        "city" => "Sumedang",
        "country" => "Indonesia"
    ]
];

var_dump($person);
var_dump($person["address"]["country"]);