<?php
$nilai ="B";


switch ($nilai) {
    case 'A':
        echo "Selamat anda lulus dengan sangat Baik".PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Selamat Anda lulus".PHP_EOL;
    default:
        echo "Mohon Maaf".PHP_EOL;
        break;
}

switch ($nilai) :
    case 'A':
        echo "Selamat anda lulus dengan sangat Baik".PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Selamat Anda lulus".PHP_EOL;
    default:
        echo "Mohon Maaf".PHP_EOL;
        break;
    endswitch;
