<?php
function ChessBoard($n) {

for($i=1; $i<=$n; $i++) {
  for ($j=1; $j<=$n; $j++) {
      if(($j+$i)%2==0) {echo " &nbsp; ";}
      else {echo " * ";}
  }
  echo "<br>";
  }
}
echo ChessBoard(5);
echo "<br>";
 ?>

 /*

   *   *
 *   *   *
   *   *
 *   *   *
   *   *

 */
