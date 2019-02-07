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
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="../css.css">
</head>

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
    <a href="index.php?page=login">Déjà inscrit ? Cliquez pour vous connecter</a>
</form>
</div>

</body>
</html>

<?php
$nom = (isset($_REQUEST['nom'])? $_REQUEST['nom']:null);
$prenom = (isset($_REQUEST['prenom'])? $_REQUEST['prenom']:null);
$pseudo = (isset($_REQUEST['pseudo'])? $_REQUEST['pseudo']:null);
$mail = (isset($_REQUEST['mail'])? $_REQUEST['mail']:null);
$motdepasse = (isset($_REQUEST['mdp'])? $_REQUEST['mdp']:null);
?>
