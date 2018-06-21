
<?php

function changeMoney($amount)
{
  $ten=0;
  $five=0;
  $two=0;
  $one=0;

  for($i=0; $i<=$amount; $i=($i+10)) {
    $ten=$i/10;
    $reszta1=$amount-$ten*10;
  }

  for($j=0; $j<=$reszta1; $j=($j+5)){
  $five=$j/5;
  $reszta2=$reszta1-$five*5;
  }

  for($k=0; $k<=$reszta2; $k=($k+2)){
  $two=$k/2;
  $reszta3=$reszta2-$two*2;
  }

  for($l=0; $l<=$reszta3; $l++){
  $one=$l;
  }

  echo $ten;
  echo "<br>";
  echo $five;
  echo "<br>";
  echo $two;
  echo "<br>";
  echo $one;
  echo "<br>";

  //return [$ten, $five, $two, $one];
  //foreach(changeMoney($amount) as $value){echo $value."<br>";}
    }


  echo changeMoney(128);
  echo "<br>";
  echo changeMoney(87);

   ?>

   <?php

   function getBilon($kwota)
   {
   	$tens = floor($kwota / 10);
   	$fives = floor(($kwota - $tens * 10) / 5);
   	$twos = floor(($kwota - $tens * 10 - $fives * 5) / 2);
   	$ones = $kwota - $tens * 10 - $fives * 5 - $twos * 2;
   	return [$tens, $fives, $twos, $ones];
   }
   foreach (getBilon(203) as $val) {
   	echo $val . "<br>";
   }


    ?>
