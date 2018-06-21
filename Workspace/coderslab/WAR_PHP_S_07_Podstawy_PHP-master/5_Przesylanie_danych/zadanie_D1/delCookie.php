<?php

if(isset($_COOKIE["user"])) {
  setcookie("user", null, time() - 3600);
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D1</title>
</head>
<body>
    <h1> Ciasteczko usunięte </h1>
</body>
</html>
