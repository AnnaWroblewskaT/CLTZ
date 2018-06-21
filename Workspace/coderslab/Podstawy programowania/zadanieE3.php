Zadanie E3
Napisz funkcję, która przyjmuje jako argument liczbę **n**
i wyświetla **n** razy na stronie napis "Programowanie w PHP jest fajne!".

<?php

function Napis($n) {

for($i=1; $i<=$n; $i++) {
  echo "<br> Programowanie w PHP jest fajne!";
}

}

echo Napis(5);

 ?>
