<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 16:28
 */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur Game_zeldop</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<div id = "connection">
    <h1>Bienvenue sur Game_zeldop ! </h1>

    <h2>Connectez-vous</h2>

    <form action="" method="post">
        <label>Votre Pseudo : </label><input type = "text" name = "logPseudo"><br>
        <label>Votre mot de passe : </label><input type = "text" name = "logMdp"><br>
        <input type="hidden" name="action" value="login">
        <input type="submit" name="Connectez-vous">
    </form>
    <br>
    <a href="index.php?page=inscription">Pas encore inscrit ? Inscrivez-vous en cliquant sur ce lien</a>
</div>
<?php
$logPseudo = isset($_REQUEST["logPseudo"]);
$logMdp = isset($_REQUEST['logMdp']);


