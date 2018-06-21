/*Napisz program liczący wartość **x!**, gdzie **!** oznacza silnię, a **x** jest zmienną.
Użyj do tego obu znanych Ci pętli.
Silnia to wynik mnożenia wszystkich liczb całkowitych od jeden do podanej liczby, czyli:

```JavaScript
5! = 1*2*3*4*5 = 120
8! = 1*2*3*4*5*6*7*8 = 4032 */

<?php


/*function factorial1($x) {
$result=1;
for($i=1; $i<=$x; $i++) {
  $result*=$i;
}
return $result;
}

echo factorial1(2);
echo "<br>";
echo factorial1(3);
echo "<br>";
echo factorial1(5);
echo "<br>";
echo factorial1(8);
echo "<br>";*/

//drugi sposób:

function factorial2($x) {

$result=1;
$i=1;

while($i<=$x) {
  $result*=$i;
  $i++;
}
return $result;
}

echo factorial2(5);
echo "<br>";
echo factorial2(3);
echo "<br>";
echo factorial2(4);
echo "<br>";


?>
