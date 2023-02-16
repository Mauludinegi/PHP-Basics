<?php
//tanpa null coaliscing operator

$data = [
    "action" => "Create"
];

$action = null;

if(isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;


//Null Coalescing Operator 
$action = $data["action"] ?? "Nothing";
echo $action . PHP_EOL;