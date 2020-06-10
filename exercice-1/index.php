<?php

$NameServer = $_SERVER['SERVER_NAME'];
$IP = $_SERVER['REMOTE_ADDR'];
$Agent = $_SERVER['HTTP_USER_AGENT'] ;

var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 </title>
 

</head>
<body>

<p>Faire une page HTML permettant de donner à l'utilisateur :
son User Agent
son adresse ip
le nom du serveur</p>

<p> <?= $NameServer ?> </p>
<p> <?= $IP ?> </p>
<p> <?= $Agent ?> </p>


</body>
</html>
