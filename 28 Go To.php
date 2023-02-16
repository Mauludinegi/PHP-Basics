<?php

goto b;

echo "Hello A" . PHP_EOL;

b:
echo "Hello World".PHP_EOL;

$counter = 1;

while(true) {
    echo "ini adalah wile loop ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10) {
        goto end;
    }
}

end:
echo "Program berakhir";