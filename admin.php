<?php
    //La session permet de générer un identifiant pour ton apparail
    //donc obligatoir pour sauvegarder la connection
    session_start();
    
    //Vérifier si la session admin existe
    if(isset($_SESSION['admin'])) {
        header("Location: connexion.php");
        die();
    }
    
    //Vérifier si la session est sur false renvoyer 
    //l'utilisateur à la connexion
    if(!$_SESSION['admin']) {
        header("Location: connexion.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Coucou bienvenu sur la page admin !</h1>
</body>
</html>
