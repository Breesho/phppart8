<?php 
    setcookie("User-name", $_POST["User-name"]); 
    setcookie("User-password", $_POST["User-password"]);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 </title>
 

</head>
<body>

<p>Faire un formulaire qui permet de récupérer le login et 
le mot de passe de l'utilisateur. A la validation du formulaire, 
stocker les informations dans un cookie.</p>



<form action="index.php" method="POST"> 

<label for="User-name">Username</label>
<input type="text" name="User-name" id="User-name-style">

<label for="User-password">Password</label>
<input type="password" name="User-password" id="User-password-style">

<input type="submit" name="" id="" href="index.php" > 

</form>

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
