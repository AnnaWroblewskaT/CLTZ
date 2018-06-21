Zadanie 2
Napisz dwie funkcje:
* ```print2DTable($table)```, która wyświetli tablicę dwuwymiarową w postaci macierzy,
* ```getMatrixTrace($array)```, która obliczy ślad macierzy
(sumę elementów na głównej przekątnej) przekazanej w parametrze.
Zakładamy, że tablica reprezentuje macierz kwadratową (liczba wierszy równa liczbie kolumn).
<?php

$tab1=array(1,2,3);
$tab2=array(4,5,6);
$tab3=array(7,8,9);
$tab2D=array($tab1, $tab2, $tab3);

function print2DTable($tablica) {
  for($i=0; $i<count($tablica); $i++) {
    for($j=0; $j<count($tablica[$i]); $j++) {
    echo $tablica[$i][$j];
    }
    echo "<br />";
  }
}

function getMatrixTrace($tablica){

  $sum=0;

  for($i=0; $i<count($tablica); $i++) {
    for($j=0; $j<count($tablica[$i]); $j++){
      if($i==$j) {
        $sum+=$tablica[$i][$j];
      }
    }
  }
  echo $sum;
}


echo "<br />";
echo print2DTable($tab2D);
echo "<br />";
echo getMatrixTrace($tab2D);

//var_dump print2DTable($tab2D);


 ?>
