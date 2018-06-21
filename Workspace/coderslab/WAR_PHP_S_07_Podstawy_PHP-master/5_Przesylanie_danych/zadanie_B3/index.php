<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $temp = $_POST["degrees"];

function conversion($temp){

  $fahrToCelc=0;
  $celcToFahr=0;

    if ($_POST["FahrToCelc"] == true) {
      $fahrToCelc=($temp-32)*5/9;
      echo $fahrToCelc;
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($_POST["celcToFahr"] == true) {
        $celcToFahr=($temp*9/5)+32;
        echo $celcToFahr;
      }
    }
  }
}



?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B3</title>
</head>
<body>

<form action="#" method="POST">
    <label>
        Temperatura:
        <input type="number" step="0.01" name="degrees">
    </label>
    <input type="submit" name="celcToFahr" value="celcToFahr">
    <input type="submit" name="FahrToCelc" value="FahrToCelc">
</form>

<?php
echo conversion($temp);
?>

</body>
</html>
