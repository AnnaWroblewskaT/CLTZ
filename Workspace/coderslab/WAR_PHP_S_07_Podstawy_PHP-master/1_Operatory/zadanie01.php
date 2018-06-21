

<?php

function Triangle($a,$b,$c) {

  if($a+$b>$c AND $a+$c>$b AND $b+$c>$a) {
    {
    echo "Można zbudować trójkąt ";
  }
   if($a==$b AND $b==$c AND $a==$c){
     echo "Jest to trójkąt równoboczny";
   }

   elseif($a==$b OR $a==$c OR $b==$c) {
     echo "Jest to trójkąt równoramienny";
   }
   else {
   echo "Jest to trójkąt różnoboczny";
   }
}
    else {echo "Nie można zbudować trójkąta ";}
  }

echo Triangle(5,5,5);
echo "<br>";
echo Triangle(4,4,5);
echo "<br>";
echo Triangle(5,5,48);
echo "<br>";
echo Triangle(5,6,7);


 ?>
