Zadanie E2
Napisz funkcję przyjmującą dwie liczby jako argumenty: **a** i **n**. Funkcja zwraca wynik
**a** do potęgi **n**.
Użyj pętli a nie funkcji wbudowanej ```pow()```.

<?php

function Power ($a, $n) {
  $power=1;
  $i=1;

  while($i<=$n) {
    $power*=$a;
    $i++;
  }
return $power;

}

echo Power(5,0);

?>
