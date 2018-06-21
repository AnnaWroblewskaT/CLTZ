<?php

/*Napisz program, który wystawi ocenę z testu (użyj **if**, **else if** i **else**).

0&ndash;39 pkt &ndash; ocena niedostateczna,
40&ndash;54 pkt &ndash; ocena dopuszczająca,
55&ndash;69 pkt &ndash; ocena dostateczna,
70&ndash;84 pkt &ndash; ocena dobra,
85&ndash;98 pkt &ndash; ocena bardzo dobra,
99&ndash;100 pkt &ndash; ocena celująca.*/

mark(65);
mark(5);
mark(102);
mark(81);

function mark($a) {

if ($a <= 39) {
  echo "ocena niedostateczna<br><br>";
}

elseif ($a>=40 AND $a<= 54) {
  echo "ocena dopuszczająca<br><br>";
}

elseif ($a>=55 AND $a<= 69) {
  echo "ocena dostateczna<br><br>";
}

elseif ($a>=70 AND $a<= 84) {
  echo "ocena dobra<br><br>";
}

elseif ($a>=85 AND $a<= 98) {
  echo "ocena bardzo dobra<br><br>";
}

elseif ($a>=99 AND  $a<= 100) {
  echo "ocena celująca<br><br>";
}
else {
  echo "podano nieprawidłową wartość<br><br>";
}

}
 ?>
