<?php

$nilai = 80;
$absen = 80;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda lulus dengan Nilai A".PHP_EOL;
} else {
    echo "Jangan semangat dan tetap putus asa".PHP_EOL;
}



// If Statement With Colon

if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A".PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
    echo "Nilai Anda B".PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
    echo "Nilai Anda C".PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
    echo "Nilai Anda D".PHP_EOL;
else :
    echo "Nilai Anda C".PHP_EOL;

endif;