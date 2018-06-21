Zadanie E4
Napisz funkcję, która przyjmuje trzy liczby
i zwraca największą z nich (zwraca, a nie wypisuje na ekranie).
<?php

function GreatestNumber($a, $b, $c) {

  if($a>$b AND $a>$c) {
    return $a;
  }
  elseif ($b>$a AND $b>$c) {
    return $b;
  }
  else {
    return $c;
  }
}

 ?>
