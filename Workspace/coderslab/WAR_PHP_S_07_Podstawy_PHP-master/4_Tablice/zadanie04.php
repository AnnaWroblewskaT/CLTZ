Zadanie 4
Napisz funkcję przyjmującą jako argument tablicę z liczbami.
Funkcja zwraca tablicę tylko z tymi liczbami, które są mniejsze od średniej arytmetycznej
wszystkich liczb w tablicy (przyjętej jako argument).
input -> [1,2,3,4,5]
output =>[1,2]
<?php

$tab1=array(9,1,2,3,4,5,6,7,8);

function averArr($tab) {
  $sum=0;
  $aver=0;

  for($i=0; $i<count($tab); $i++) {
    $sum+=$tab[$i];
    $aver=$sum/count($tab);
    }
    for($i=0; $i<count($tab); $i++) {
      if($tab[$i]<$aver){
        echo $tab[$i]."<br />";
        }
      }
    }
echo "<br />";
echo averArr($tab1);



 ?>
