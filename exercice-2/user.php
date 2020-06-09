<?php

session_start();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 </title>
 

</head>
<body>

<p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
Ces variables auront été définies directement dans le code. 
Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

<p>
         <?= 'INFO : <br>' . $_SESSION['FirstName'] . '<br>' . $_SESSION['LastName'] . '<br>' . $_SESSION['Age']?> 
</p>


</div>
</body>
</html>
