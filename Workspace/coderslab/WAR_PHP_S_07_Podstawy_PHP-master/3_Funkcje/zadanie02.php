Zadanie 2
Napisz funkcję ```perfectNumber($n)```, która przyjmuje liczbę całkowitą. Funkcja zwraca
następujące wartości:
* `true`, gdy liczba jest doskonała,
* `false`, gdy liczba nie jest doskonała.

Liczba doskonała jest równa sumie swoich dzielników. Przykładami takich liczb są:
* 1 = 1,
* 6 = 1+2+3.

<?php

function perfNum($n)
{
  $sum=0;
  for($i=1; $i<$n; $i++) {
    if($n%$i==0) {
      $sum+=$i;
    }
  }
      if($sum==$n) {
        //return true;
        echo "To jest liczba doskonała";
        }
      else {
        //return false;
        echo "To nie jest liczba doskonała";
      }
}

echo "<br>";
echo perfNum(28);
echo "<br>";
echo perfNum(6);
echo "<br>";
echo perfNum(10);
 ?>
