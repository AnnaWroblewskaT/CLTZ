
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $amount = $_POST["cashAmount"];

  function exchange ($amount) {

  $eurUsd = 0;
  $usdEur = 0;
  $eurPln = 0;
  $plnEur = 0;
  $usdPln = 0;
  $plnUsd = 0;

    if($_POST["conversionType"] == "EURtoUSD"){
      $eurUsd=1.4*$amount;
      echo $eurUsd;
    }

    elseif($_POST["conversionType"] == "USDtoEUR") {
      $usdEur=0.71*$amount;
      echo $usdEur;
    }

    elseif($_POST["conversionType"] == "EURtoPLN") {
      $eurPln=4*$amount;
      echo $eurPln;
    }

    elseif($_POST["conversionType"] == "PLNtoEUR") {
      $plnEur=0.25*$amount;
      echo $plnEur;
    }

    elseif($_POST["conversionType"] == "USDtoPLN") {
      $usdPln=2*$amount;
      echo $usdPln;
    }

    elseif($_POST["conversionType"] == "PLNtoUSD") {
      $plnUsd=0.5*$amount;
      echo $plnUsd;
    }
    
  }
}

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B4</title>
</head>
<body>

<?php

echo exchange($amount);

?>

<form action="#" method="POST">
    <label>
        Kwota:
        <input type="number" min="0.00" step="0.01" name="cashAmount">
    </label>
    <label>
        Konwersja:
        <input type="radio" name="conversionType" value="EURtoUSD" > EUR → USD <br>
        <input type="radio" name="conversionType" value="USDtoEUR" > USD → EUR <br>
        <input type="radio" name="conversionType" value="EURtoPLN" > EUR → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoEUR" > PLN → EUR <br>
        <input type="radio" name="conversionType" value="USDtoPLN" > USD → PLN <br>
        <input type="radio" name="conversionType" value="PLNtoUSD" > PLN → USD <br>
    </label>
    <input type="submit">
</form>

</body>
</html>
