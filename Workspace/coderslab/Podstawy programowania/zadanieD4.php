* 2 3 4 5
* * 3 4 5
* * * 4 5
* * * * 5
* * * * *
* * * * *
* * * * 5
* * * 4 5
* * 3 4 5
* 2 3 4 5

<?php
echo "<br>";

function TreeNumbers1 ($n) {
  for($i=1; $i<=$n; $i++){
    for($j=1; $j<=$n; $j++) {
      if($j<=$i){
      echo "*";
      }
      else {echo $j;}
    }
        echo "<br>";
    }
  }
  function TreeNumbers2($n){
    for($i=1; $i<=$n; $i++) {
      for($j=1; $j<=$n; $j++) {
        if($j+$i<=($n+1)){
        echo "*";
        }
        else {echo $j;}
      }
          echo "<br>";
      }
  }

echo "<br>";
echo TreeNumbers1(5);
echo TreeNumbers2(5);






 ?>
