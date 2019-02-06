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
        font-weight: bold;

    }
    form {

        display: flex;
        justify-content: center;
        flex-direction: column;

    }

    a {
        color: white;
    }

    #connection {

        text-align: center;
    }

</style>
<body>

<div id = "connection">
<h1>Bienvenue sur Game_zeldop ! </h1>

<h2>Connectez-vous</h2>

<form action="" method="post">
    <label>Votre Pseudo : </label><input type = "text" name = "logPseudo"><br>
    <label>Votre mot de passe : </label><input type = "text" name = "logMdp"><br>
    <input type="submit" name="Connectez-vous">
    </form>
    <br>
<a href="inscription.php">Pas encore inscrit ? Inscrivez-vous en cliquant sur ce lien</a>
</div>

