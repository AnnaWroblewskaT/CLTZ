Zadanie 1
Napisz funkcję ```printTable($array)```,
która w pętli przeiteruje po wszystkich elementach tablicy i wypisze je na ekranie.
<?php

$array1 = [1,2,3,4,5];

function printTable($array) {
  for ($i=0; $i<count($array); $i++) {
    echo $array[$i];
  }
}

echo printTable($array1);


 ?>
