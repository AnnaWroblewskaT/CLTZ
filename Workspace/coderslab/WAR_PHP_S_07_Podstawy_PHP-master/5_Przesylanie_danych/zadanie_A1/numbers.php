<?php
$start=0;
$end=0;


function numbers($start, $end) {

if($_SERVER['REQUEST_METHOD']==='GET'){

  $start=$_GET['liczba1'];
  $end=$_GET['liczba2'];

}

  if(isset($_GET['liczba1']) AND isset($_GET['liczba2'])) {

    for($i=$start; $i<=$end; $i++){
      echo $i;
      echo "<br />";
    }
  }

  if(!empty($_GET['liczba1']) AND !empty($_GET['liczba2'])) {
    echo "Nie przesłano danych getem";
    }
  }

// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli liczby

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A1 STRONA DRUGA</title>
</head>
<body>

<?php

echo numbers($start, $end);

?>


</body>
</html>
