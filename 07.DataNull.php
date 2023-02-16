<?php
$name = "Egi";
$name = NULL;
var_dump($name);

//Mengecek apakah Data NULL (isNULL($variable));
echo "Is Name Null: ";
echo is_null($name);
echo "\n";

//Mengecek Variable ada
$y = "Egi";
var_dump(isset($y));

//Menghapus Variable
$x = "Egi";
unset($x);
echo $x;
