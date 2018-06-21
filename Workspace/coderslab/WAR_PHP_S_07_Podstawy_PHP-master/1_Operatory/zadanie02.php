Zadanie 2
Stwórz trzy zmienne (```$a```, ```$b```, ```$c```)z wartościami liczbowymi.
Napisz skrypt, który dla trzech zmiennych sprawdzi, czy są to liczby trójki pitagorejskiej.
Trójka pitagorejska to trzy liczby spełniające poniższe założenie:
a^2 + b^2 = c^2
Pamiętaj, żeby sprawdzić wszystkie trzy możliwości ułożenia liczb! Użyj operatorów logicznych.
<?php

function Pitagoras ($a, $b, $c) {

if ($a*$a+$b*$b===$c*$c || $b*$b+$c*$c===$a*$a || $a*$a+$c*$c===$b*$b) {
echo "To jest trójka pitagorejska";
}

else {echo "To nie jest trójka pitagorejska";}

}

echo Pitagoras(3,4,5);
echo "<br>";
echo Pitagoras(1,2,3);

 ?>
