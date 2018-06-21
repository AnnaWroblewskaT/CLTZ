<?php

function multi($width, $height) {

if($_SERVER['REQUEST_METHOD']==='GET') {

  $width=$_GET['width'];
  $height=$_GET['height'];
}

if(isset($_GET['width']) AND isset($_GET['height'])) {


  for($i=1; $i<=$height; $i++){
    for($j=1; $j<=$width; $j++) {

      $product=$i*$j;
      echo $i."x".$j."=".$product." . . ";
    }
    echo "<br>";
  }
 }

 else {
   $height=10;
   $width=5;

   for($i=1; $i<=$height; $i++){
     for($j=1; $j<=$width; $j++) {

       $product=$i*$j;
       echo $i."x".$j."=".$product." . . ";
      }
     echo "<br>";
    }
  }
}


?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A2</title>
</head>
<body>

<?php

echo multi($height, $width);

?>


</body>
</html>
