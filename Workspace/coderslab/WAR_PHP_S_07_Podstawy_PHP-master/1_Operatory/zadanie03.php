Napisz skrypt, który obliczy i wyświetli pole oraz obwód
prostokąta o bokach zdefiniowanych w zmiennych ```$bokA``` i ```$bokB```.

<?php

function Rectangle ($a, $b) {

  $perimeter=$a*2+$b*2;
  $area=$a*$b;

  echo "Obwód prostokąta wynosi: $perimeter, a jego pole $area";

}

echo Rectangle(2,3);
echo "<br>";


 ?>
