<?php
//Expression apapun yang memiliki nilai/value
$a = 5; //5 adalah Expression
$b = $a; //$a adalah Expression
function getValue() {
    return 100;
}
$value = getValue(); //getValue() adalah Expression

//Statement berisikan execution komplit, biasanya diakhiri ;
$name = "Egi Purnama M"; //Baris ini adalah Statement
print $name."\n"; //Ini adalah Statement
$date = new DateTime();//Baris adalah statement

//Block adalah kumpulan statement yang terdiri dari nol atau lebih statement
//Block diawali dan diakhiri dengan {};
function runApp($name) {
    echo "Start Program".PHP_EOL;
    echo "Hello $name".PHP_EOL;
    echo "End Program".PHP_EOL;
};

runApp("Egi");
