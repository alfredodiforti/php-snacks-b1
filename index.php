<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
<?php

 if (empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])) {
     echo " parametri mancanti, accesso negato";
 }
 elseif (strpos($_GET['email'], '@') === false || strpos($_GET['email'], '.' === false)) {
     echo "indirizzo email non corretto, correggilo!";
 }
 elseif (strlen($_GET['name']) < 3) {
     echo "nome non valido";
 }
 elseif (is_numeric($_GET['age']) === false) {
     echo "l'età inserita non è valida!";
 }
 else {
     echo "Autenticazione riuscita con successo!!! benvenuto " . $_GET['name'];
 }

?>
</body>
</html>