<?php

echo 'firstName: ';
echo 'Egi';
echo "\n";

echo "lastName:";
echo "Mau\t lud\t in";

echo "\nUmur: ";
echo 19;
echo "\n";

//Heredoc adalah fitur untuk membuat multiline String. Anggap saja seperti Double Quote.
echo <<<Egi
Heredoc merupakan fitur di php yang berfungsi untuk membuat multiline String,
Sehingga akan lebih simpel dan praktis.
Dengan adanya fitur Heredoc maka akan memudahkan para programer
karena tidak perlu cara manual untuk melakukan enter, tab dan yang lain-lain.

Egi;

//NowDoc sama dengan Heredoc dan single quote.

echo <<<Mauludin

NowDoc sama dengan Heredoc.
Asumsikan mirip Single Quote.
Namun yang membedakan adalah pada NowDoc tidak memiliki kemampuan parsing seperti Heredoc atau Double Quote.
Masalah parsing akan di bahas di materi Manipulasi String.
Mauludin;


?>