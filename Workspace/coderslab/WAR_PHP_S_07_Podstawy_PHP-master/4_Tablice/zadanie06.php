Zadanie 6
Napisz funkcję ```createMultiTable($n)```, która przyjmuje liczbę całkowitą.
Funkcja ta ma zwrócić dwuwymiarową tablicę, która w obu wymiarach ma podaną wielkość.
Tablicę możesz wypełnić kolejnymi liczbami całkowitymi.
<?php

function createMultiTable($n)
  {
    $array = [];
    $counter=0;

    for($i=0; $i<$n; $i++) {
      $array[]=[];
        for($j=0; $j<$n; $j++) {
          $array[$i][];
        }
      }
    return $array = $counter++;
  }

var_dump (createMultiTable(2));

 ?>
