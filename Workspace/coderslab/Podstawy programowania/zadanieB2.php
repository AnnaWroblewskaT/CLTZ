/*Zadanie B2
Napisz program definiujący jako zmienne trzy liczby całkowite.
Za pomocą instrukcji **if**, **else** wypisz na stronie największą z tych liczb.
Do porównywania liczb użyj operatorów:
> (większy),
>= (większy równy),
< (mniejszy),
<= (mniejszy równy).*/

<?php



GetHighestNumber (1,2,3);
GetHighestNumber (8, 9, 878);
GetHighestNumber (8, 9, 90);

function GetHighestNumber ($a, $b, $c) {

if ($a > $b AND $a > $c) {
  echo "$a<br><br>";
}

elseif ($b > $a AND $b > $c) {
  echo "$b<br><br>";
}

else {
  echo "$c<br><br>";
}


}
 ?>
