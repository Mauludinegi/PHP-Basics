<?php 

$angka = [1,2,3,4,5];

for ($i=0; $i < count($angka); $i++) {
    echo "Data ke-" . $angka[$i] . PHP_EOL;
}
echo "\n";
foreach ($angka as $value) {
    echo "hello {$value}".PHP_EOL;
} 


//array map for each
$person = [
    "first_name" => "Egi",
    "middle_name" => "Purnama",
    "last_name" => "Mauludin"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}