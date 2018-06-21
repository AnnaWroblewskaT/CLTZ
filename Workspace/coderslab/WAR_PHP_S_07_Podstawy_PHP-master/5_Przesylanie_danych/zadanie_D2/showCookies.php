<?php

// tutaj umieść kod wczytujący wartośc z ciasteczka

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D2</title>
</head>
<body>
    <h1> Wszystkie ciasteczka w systemie: </h1>

    <h1> Wartość wczytana z ciasteczka to: <?php
    $user = isset ($_COOKIE["cookieName"]) ? $_COOKIE["cookieName"] : "nie ma takiego ciasteczka";
    echo $user;
     ?> </h1>

</body>
</html>
