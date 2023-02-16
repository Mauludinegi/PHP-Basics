<?php
//Dot(.) Operator adalah untuk menambahkan String
//Jika(+) mungkin akan terjadi error karena dikira operasi matematika
//Di php String bisa langsung dikonversi jadi number
$name = "Egi Purnama";

echo "Nama: ".$name.PHP_EOL;
echo "Nilai: "."A"."\n";

//Konversi Number dan sebaliknya
$a = "10";
$valueString = (float)$a;
var_dump($valueString);
$valueString = (int)$a;
var_dump($valueString);

//Di php bisa mengakses perkarakter String
$name = "Egi";

echo $name[0].PHP_EOL;
echo $name[1].PHP_EOL;
echo $name[2].PHP_EOL;

$array1 = array(1, 2, 3, 4);
foreach ($array1 as $key => $value) {
    echo $value.", ";
}
echo PHP_EOL;

//Curly Brace
$var = "VAR";
echo "Hello {$var}s, selamat belajar php".PHP_EOL;

