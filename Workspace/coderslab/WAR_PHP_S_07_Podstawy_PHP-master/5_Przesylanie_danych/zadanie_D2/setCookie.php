<?php

if ($_SERVER['REQUEST_METHOD']==='POST') {
$cookieName = $_POST['cookieName'];
$cookieValue = $_POST['cookieValue'];
$expire=time() + 3600;

setcookie($cookieName, $cookieValue, $expire);
}
else {
  echo "nie można utworzyć ciasteczka";
}
// tutaj umieść kod nastawiający wartośc w ciasteczku, ale tylko jeżeli
//wszeliśmy na stronę metodą POST

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D2</title>
</head>
<body>
    <form action="#" method="POST">
        <label>
            Nazwa ciasteczka:
            <input type="text" name="cookieName">
        </label>
        <label>
            Wartość ciasteczka:
            <input type="text" name="cookieValue">
        </label>
        <input type="submit">
    </form>
</body>
</html>
