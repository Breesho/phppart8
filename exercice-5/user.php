
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

<p>Faire une page qui va pouvoir modifier
 le contenu du cookie de l'exercice 3.</p>
<p>

<?php
if (isset($_COOKIE["User-name"]) AND isset($_COOKIE["User-password"] )) {
   echo  $_COOKIE["User-name"]. "<br>" . $_COOKIE["User-password"];
} else {

    echo  "Impossible d\'afficher les éléments";

}

?> 



<form action="../exercice-3/index.php" method="POST"> 

<label for="User-name">Username</label>
<input type="text" name="User-name" id="User-name-style">

<label for="User-password">Password</label>
<input type="password" name="User-password" id="User-password-style">

<input type="submit" name="" id="" href="../exercice-3/index.php" > 

</form>


</p>




</body>
</html>
