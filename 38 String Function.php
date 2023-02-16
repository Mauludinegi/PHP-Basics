<?php
/*
join() / implode()  : Menggabungkan array menjadi string
explode()           : Memecah String menjadi array
strtolower()        : Mengubah string menjadi lowercase
strtoupper()        : Mengubah string menjadi uppercase
substr()            : Mengambil sebagian string
trim()              : Menghapus whitespace di depan dan belakang string
*/

var_dump(join(",", [1, 2, 3, 5]));
var_dump(explode(" ", "Giw Mauludin"));
var_dump(strtolower("GIW MAULUDIN"));
var_dump(strtoupper("giw mauludin"));
var_dump(trim("     giw     "));
var_dump(substr("Giw Mauludin", 0, 3));