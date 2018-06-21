<?php

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D1</title>
</head>
<body>
    <h1> Wartość wczytana z ciasteczka to: <?php
    $user = isset ($_COOKIE["user"]) ? $_COOKIE["user"] : "nie ma takiego ciasteczka";
    echo $user;
     ?> </h1>
</body>
</html>
