/*Zadanie C3
Napisz program, który na podstawie wartości zmiennej **n** wypisuje wszystkie liczby od zera
do **n**.Przy każdej liczbie program ma napisać, czy liczba jest parzysta czy nie. Np.:
0 – parzysta 1 – nieparzysta 2 – parzysta 3 – nieparzysta*/
<?php
function EvenOdd($n) {

for ($i=0; $i<=$n; $i++) {

if ($i%2==0) {
echo $i;
echo " - parzysta";
echo "<br>"; }

else {
  echo $i;
  echo " - nieparzysta";
  echo "<br>"; }
}

}

echo EvenOdd(25);
echo "<br>";














 ?>
