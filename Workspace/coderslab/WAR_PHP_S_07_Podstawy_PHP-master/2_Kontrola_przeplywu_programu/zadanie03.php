Zadanie 3
Napisz skrypt spełniający następujące założenia:
* skrypt przyjmuje liczbę (`$liczba`) całkowitą dodatnią,
* skrypt sumuje wszystkie nieparzyste liczby całkowite dodatnie,
które są mniejsze bądź równe wskazanej liczbie.


<?php

function SumUpOdds($n)
{
  $sum=0;
  for($i=1; $i<=$n; $i++) {
      if ($i%2!=0) {
        $sum+=$i;
      }
   }
   return $sum;
 }
  echo "<br>";
  echo SumUpOdds(5);
  echo "<br>";
  echo SumUpOdds(4);












?>
