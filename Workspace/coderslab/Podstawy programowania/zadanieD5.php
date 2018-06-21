<?php

function MultiTable($n) {

  for($i=1; $i<=$n; $i++) {
      for($j=1; $j<=$n; $j++) {

        echo $i;
        echo "x";
        echo $j;
        echo "=";
        echo $i*$j;
        echo "<br>";
   }

  }
  echo "<br>";
  echo "<br>";
  echo "<br>";
}
echo MultiTable(8);
 ?>
