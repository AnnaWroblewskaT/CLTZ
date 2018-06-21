<?php

session_start();
echo isset($_SESSION) ? "sesja istnieje: ".session_id() : "sesja nie istnieje";

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C1</title>
</head>
<body>
      <h1> Sesja nastawiona na początkową wartość </h1>
</body>
</html>
