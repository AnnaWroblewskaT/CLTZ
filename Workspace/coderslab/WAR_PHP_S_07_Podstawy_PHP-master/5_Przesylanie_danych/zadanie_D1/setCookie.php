<?php
$name="user";
$value="Tygrys";
$expire=time() + 3600;

setcookie($name, $value, $expire);

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D1</title>
</head>
<body>
    <h1> Ciasteczko nastawione na początkową wartość </h1>
</body>
</html>
