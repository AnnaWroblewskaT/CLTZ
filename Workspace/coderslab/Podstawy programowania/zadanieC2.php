<?php
/*Zadanie C2: Napisz program liczący sumę wszystkich liczb w podanym przedziale od **x** do **y**.
Użyj do tego obu znanych Ci pętli.
Np. dla ```x = 5```, ```y = 10``` suma to ```5+6+7+8+9+10=45```.*/

function AddNumbers ($x,$y) {
$result=0;
for ($i=$x; $i<=$y; $i++) {
$result+=$i;
}
return $result;
}

echo AddNumbers (5,10);
echo "<br>";
echo AddNumbers (2,4);
echo "<br>";
?>
