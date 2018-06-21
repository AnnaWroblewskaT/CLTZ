/*Zadanie 2
Program dnia pewnego seminarium wygląda następująco:
* 8-11 wykłady, * 12-13 dyskusje, * 14 obiad, * 15-18 prelekcje, * 19 kolacja.
Napisz skrypt, który na podstawie wskazanej pory dnia (zmienna ```$godzina```)
wyświetli informacje o wszystkich zaplanowanych punktach dnia (w odstępach godzinnych)
które wydarzą się po tej godzienie. Użyj instrukcji **switch**. Podajemy tylko pełne godziny.*/
<?php
echo "<br>";
echo "<br>";

function Timetable($hour)
{
  switch ($hour) {
    case $hour>=8 AND $hour<=11:
      echo "8-11: wykłady <br>";
    case $hour>=12 AND $hour<=13:
        echo "12-13: dyskusje <br>";
    case $hour==14:
        echo "14: obiad <br>";
    case $hour>=15 AND $hour<=18:
        echo "15-18: prelekcje <br>";
    case $hour==19:
        echo "19: kolacja <br>";
        break;
    default:
      echo "nieprawidłowa godzina";
      break;
  }
}

echo Timetable(10);
echo "<br>";
echo Timetable(13);
echo "<br>";
echo Timetable(17);
echo "<br>";
echo Timetable(24);





 ?>
