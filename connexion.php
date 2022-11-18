<?php
    //La session permet de générer un identifiant pour ton apparail
    //donc obligatoir pour sauvegarder la connection
    session_start();
    
    //Si l'utilisateur est connecter le renvoyer à l'accueil
    if(isset($_SESSION['admin'])) {
        header("Location: index.php");
        die();
    }

    //Mot de passe à choisir pour otenir l'accès admin
    $password = "TonMotDePasse";

    //Vérifier que la méthode de requête soit bien en POST
    //Ce n'est pas obligatoir
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        //récupère la valeur écrite dans le formulaire du champ appeler <<password>>
        $passwordFormulaire = $_POST['password'];

        //Vérifier tout simplement que le mot de passe choisi
        //Corresponde au mot de passe écrit dans le formulaire.
        if($_POST['password'] == $password) {
            //Créer un session admin et la passer sur vrai
            $_SESSION['admin'] = true;

            //Nous rediriger sur la page admin
            header("Location: admin.php");
            die();
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <!-- Formulaire HTML pour entrer des valeurs -->
    <form method="post">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Connexion</button>
    </form>
</body>
</html>     
