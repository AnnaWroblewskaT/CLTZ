Zadanie E1 &ndash; rozwiązywane z wykładowcą
Napisz funkcję o nazwie ```FooBar``` przyjmującą jedną zmienną (liczbę całkowitą).
Funkcja ta ma wypisywać kolejne liczby, ale:
* w miejsce liczb podzielnych przez 3 wypisywać ```Foo```,
* w miejsce liczb podzielnych przez 5 wypisywać ```Bar```,
* w miejsce liczb podzielnych przez 3 i 5 wypisywać ```FOOBAR```.

Na przykład dla argumentu ```x = 15``` wynik ma być następujący:
```
12Foo4BarFoo78FooBar11Foo1314FOOBAR
<?php

function FooBar($n) {

for($i=1; $i<=$n; $i++) {
  if ($i%3==0 AND $i%5==0) {
    echo "FooBar";
  }
  elseif ($i%3==0){
  echo "Foo";
  }
  elseif($i%5==0) {
    echo "Bar";
  }
  else {
    echo $i;
  }
}
}

echo "<br>";
echo FooBar(15);





 ?>
