Zadanie 4
Napisz funkcję `max2`. Funkcja przyjmuje dwie liczby, a następnie zwraca większą z nich.
Następnie napisz funkcję `max3` zwracającą największą spośród trzech podanych liczb.
Funkcja `max3` ma do tego celu używać funkcji `max2`.

<?php

function max2($a, $b)
{

  if($a>$b) {
    $max2=$a;
  }
  else {
    $max2=$b;
  }
  return $max2;
}

function max3($a,$b)
  {
    if($a>$b) {
      return $a;
    }
    else {
      return $b;
    }
  }

echo max2(4,5);
echo max3(max2(4,5),8);


 ?>
