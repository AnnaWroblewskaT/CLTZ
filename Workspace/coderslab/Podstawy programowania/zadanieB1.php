<?php

$a = 4;
$b = 2;
$c = 3;

if ($a + $b > $c AND $a + $c > $b AND $b + $c > $a) {
  echo "Z tych odcinków da się zbudować trójkąt";
}

else {
  echo "Nie da się zbudować trójkąta";
}

?>
