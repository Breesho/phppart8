
<?php 
    setcookie("User-name", $_POST["User-name"]); 
    setcookie("User-password", $_POST["User-password"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 </title>
 

</head>
<body>

<p>Faire une page qui va récupérer
 les informations du cookie créé à l'exercice 3 
 et qui les affiche.</p>


 <p>
<?php
if (isset($_COOKIE["User-name"]) AND isset($_COOKIE["User-password"] )) {
   echo  $_COOKIE["User-name"]. "<br>" . $_COOKIE["User-password"];
} else {

    echo  "Impossible d\'afficher les éléments";

}

?> 
</p>



</div>
</body>
</html>
