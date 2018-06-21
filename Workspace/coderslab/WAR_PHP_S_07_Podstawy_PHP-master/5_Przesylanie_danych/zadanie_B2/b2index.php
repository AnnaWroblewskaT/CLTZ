### Zadanie B2 &ndash; zadania do rozwiązania z wykładowcą
Na stronie napisz formularz, który będzie zawierał jedno pole tekstowe i jeden
checkbox. Formularz ten ma przekierowywać do tej samej strony metodą POST.
Skrypt ma sprawdzać, czy wpisany przez użytkownika tekst zawiera wulgaryzmy
&ndash; jeżeli tak, to powinien zastąpić je dowolnymi znakami.
Na przykład frazę „cholera, znowu to PHP“ powinien zastąpić frazą „*******,
znowu to PHP“).Jeżeli użytkownik zaznaczy checkbox „Jestem świadomy konsekwencji“, to skrypt
nie sprawdzi wulgaryzmów.
Tekst wpisany przez użytkownika ma wyświetlić się (w formie ocenzurowanej lub nie)
pod formularzem.
Dodatkowo postaraj się, aby liczba gwiazdek odpowiadała liczbie znaków w cenzurowanym słowie.

<?php
if($_SERVER['REQUEST_METHOD']==='POST') {

  $uglyWords=array('cholera', 'fcuk', 'dupa')
}


?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B2</title>
</head>
<body>

<?php

if( ($string=="cholera" || $string=="fcuk") && $_POST["userAgreement"]===false) {
 //echo "nie przeklinaj gnojku";
 for ($i=0; $i<=strlen($string); $i++){
   echo "*";
 }
}
else {
  echo $_POST["userText"];
}

?>


<form action="#" method="POST">
    <label>
        Twój tekst:
        <input type="text" name="userText">
    </label>
    <label>
        Jestem świadomy konsekwencji
        <input type="checkbox" name="userAgreement">
    </label>
    <input type="submit">
</form>

</body>
</html>
