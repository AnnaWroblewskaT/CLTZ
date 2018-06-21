<?php

if(isset($_POST['submit'])){
  echo "Witaj,"." ".$_POST['userName']." ".$_POST['userSurname'];
}

// tutaj umieść kod sprawdzający czy weszliśmy na stronę POST-em i wczytujący
//odpowiednie dane do zmiennych.

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B1</title>
</head>
<body>

<?php

//echo "Witaj,"." ".$_POST['userName']." ".$_POST['userSurname'];


?>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <label>
        Imię:
        <input type="text" name="userName">
    </label>
    <label>
        Nazwisko:
        <input type="text" name="userSurname">
    </label>
    <input type="submit"  name="submit">
</form>

</body>
</html>
