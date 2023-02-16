<?php
/* 
Require     : jika file tidak ditemukan, program berhenti
Include     : Jika file tidak ditemukan, program tetap dijalankan
*/

// require("41 lib/myFunction.php");
include("lib/myFunction.php");
include_once("lib/myFunction.php");

echo sayHello("Giw", "Mauludin");

//require_once dan include_once
//supaya tidak bisa lagi mengambil file yang sama


?>