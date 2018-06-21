Zadanie 1 &ndash; do rozwiązania z wykładowcą
Napisz funkcję ```rentCost($days)```, która pobiera liczbę dni jako argument,
a następnie wylicza koszt wynajmu pokoju według podanego wzoru:
* wynajem trwa jeden dzień, koszt pokoju 200 zł/dzień,
* wynajem trwa od dwóch do trzech dni, koszt pokoju 180 zł/dzień,
* wynajem trwa od czterech do siedmiu dni, koszt pokoju 160 zł/dzień,
* wynajem trwa osiem lub więcej dni, koszt pokoju 150 zł/dzień.
Dodatkowo za każdy pełny tydzień przysługuje 50 zł zniżki.
<?php
$cost=0;
$weekdiscount=0;

function rentCost($days)
{
    if($days==1) {
      $cost=200;
    }
    elseif($days<=3){
      $cost=180*$days;
    }
    elseif($days<=6){
      $cost=160*$days;
    }
    elseif($days==7){
      $cost=160*$days-50;
    }
    elseif($days>=8) {
      $weekdiscount=$days/7;
      $cost=150*$days-floor($weekdiscount)*50;
    }

        return $cost;
}
echo "<br>";
echo rentCost(7); //1070
echo "<br>";
echo rentCost(3); //540
echo "<br>";
echo rentCost(15); //2150
echo "<br>";
echo rentCost(8); //1150


 ?>
