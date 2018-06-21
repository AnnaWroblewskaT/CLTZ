Zadanie 5
Napisz funkcję, która sprawdza, czy zmienna przekazana jako pierwszy parametr występuje w tablicy
przekazanej jako drugi parametr. Jeżeli tak - funkcja ma zwrócić ```true```, jeżeli nie - ```false```.
<?php

$n=5;
$arr1=array(1,5,9,13);
$arr2=array(1,8,9,13);
$arr3=array(1,8,9,13,5);

function checkN($n,$arr) {

  if(in_array($n, $arr)==true){
    return true;
    }
      else {return false;}
}

echo "<br />";
echo checkN($n, $arr1);
echo "<br />";
echo checkN($n, $arr2);
echo "<br />";
echo checkN($n, $arr3);





 ?>
