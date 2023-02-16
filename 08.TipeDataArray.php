<?php
 $values = array(1,2,3,4,5);
 var_dump($values);

 $names = ["Egi", "Purnama", "M"];
 var_dump($names);

 $mixed = ["Egi", 1];
 var_dump($mixed);


 
 //Mengakses data
 var_dump($values[0]);
 

 //Mengubah data $array[index] = value
 $values[1] = "String";
 var_dump($values);

 //Menambah data $array[] = value
 $values[] = 10;
 var_dump($values);

 //Menghapus data unset(array[index])
 unset($values[0]);
 var_dump($values);

 //Menghitung data count($array);
 echo(count($values));
 