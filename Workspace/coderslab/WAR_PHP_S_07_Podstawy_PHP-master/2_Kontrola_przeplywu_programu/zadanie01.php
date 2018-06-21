
Zadanie 1
Napisz skrypt, który wyświetli nazwę 
miesiąca na podstawie zmiennej zawierającej numer miesiąca. Skorzystaj z instrukcji **switch**.
<?php

function Month($m) {

  switch($m) {
    case 1:
      echo "styczeń";
      break;
    case 2:
      echo "luty";
      break;
    case 3:
      echo "marzec";
      break;
    case 4:
      echo "kwiecień";
      break;
    case 5:
      echo "maj";
      break;
    case 6:
      echo "czerwiec";
      break;
    case 7:
      echo "lipiec";
      break;
    case 8:
      echo "sierpień";
      break;
    case 9:
      echo "wrzesień";
      break;
    case 10:
      echo "październik";
      break;
    default:
      echo "nie ma takiego miesiąca";
  }

}

echo "<br>";
echo Month(4);
echo "<br>";
echo Month(66);
echo "<br>";
echo Month(6);

 ?>
