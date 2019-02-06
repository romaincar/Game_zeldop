<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
*/

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur Game_zeldop</title>
</head>
<style>

    body {
        display: flex;
        width: 99%;
        height: 95vh;
        justify-content: center;
        align-items: center;
        background-image: url("Images/background.jpg");
        background-position: -100%;
        color: white;
        font-family: "Noto Sans";
    }


    form {

        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    a {
        color: white;
    }

    #inscription {
        text-align: center;
        line-height: 30px;

    }

</style>
<body>

<div id = "inscription">
<h1>Bienvenue sur Game_zeldop ! </h1>

<h2>Inscription</h2>
<form action="" method="post">
    <label>Votre Nom : </label><input type="text" name = "nom"><br>
    <label>Votre Prenom : </label><input type="text" name = "prenom"><br>
    <label>Votre Pseudo : </label><input type = "text" name = "pseudo"><br>
    <label>Votre e-mail : </label><input type="text" name = "mail"><br>
    <label>Votre mot de passe : </label><input type="password" name = "mdp"><br>
    <input type ="submit" value="Inscrivez-vous">
    <br>
    <a href="index.php">Déjà inscrit ? Cliquez pour vous connecter</a>
</form>
</div>


</body>
</html>

