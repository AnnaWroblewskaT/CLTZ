<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$uglyWords = array('cholera', 'fcuk', 'dupa');

  	$string = $_POST["userText"];

  	if ($_POST["userAgreement"] == false) {
	  	foreach($uglyWords as $word) {
	  		if (strpos($string, $word) !== false) {
	  			$replacement = '';
	  			for($i=0; $i<strlen($word); $i++) {
	  				$replacement .= '*';
	  			}
	  			$string = str_replace($word, $replacement, $string);
	  		}
	  	}
	  	echo $string;
	} else {
	  	echo $_POST["userText"];
	}
}
### Zadanie B2 &ndash; zadania do rozwiązania z wykładowcą
Na stronie napisz formularz, który będzie zawierał jedno pole tekstowe i jeden checkbox. Formularz ten ma przekierowywać do tej samej strony metodą POST. Skrypt ma sprawdzać, czy wpisany przez użytkownika tekst zawiera wulgaryzmy &ndash; jeżeli tak, to powinien zastąpić je dowolnymi znakami. Na przykład frazę „cholera, znowu to PHP“ powinien zastąpić frazą „*******, znowu to PHP“).
Jeżeli użytkownik zaznaczy checkbox „Jestem świadomy konsekwencji“, to skrypt nie sprawdzi wulgaryzmów.
Tekst wpisany przez użytkownika ma wyświetlić się (w formie ocenzurowanej lub nie) pod formularzem.
Dodatkowo postaraj się, aby liczba gwiazdek odpowiadała liczbie znaków w cenzurowanym słowie.

<?php
if(isset($_POST['submit'])){
  $_POST["usertext"]=$string;
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

if( $_POST["userText"]=="cholera" || $_POST["userText"]=="fcuk" AND $_POST["userAgreement"]==null) {
 //echo "nie przeklinaj gnojku";
 for ($i=1; $i<=strlen($string); $i++){
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
