
<?php


?>

!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur Game_zeldop</title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <link rel="stylesheet" type="text/css" href="../css.css">
</head>

<body>

<div id = "inscription">
    <h1>Espace modification ! </h1>
<?php
    while($donnees = $result->fetch_assoc()){
        $val = $donnees['id'];

    ?>
    <div>
        <a href="delete.php?id=<?= $val ?>"><img src="supprimer.png" height="40" width="40" alt="Supprimer"></a> <a href="modification.php?id=<?php echo $donnees['id']?>"><img src="modifier.png" height="40" width="40" alt="Modifier"></a>
        <label id="nom" class="grpnom">Votre Nom : </label><div class="grpnom" id="echonom"><?php echo ['nom']?></div><br>
        <label id="prenom" class="grpprenom">Votre Prenom : </label><div class="grpprenom" id="echoprenom"><?php echo ['prenom']?></div><br>
        <label id="mail" class="grpmail">Votre e-mail : </label><div class="grpmail" id="echomail"><?php echo ['mail']?></div><br>
        <label id="mdp" class="grpmdp">Votre mot de passe : </label><div class="grpmdp" id="echomdp"><?php echo ['mdp']?></div><br>
        <input id="mod" type ="submit" value="modifier">
        <br>
    </div>
    <?php
    }
    ?>
</div>
</body>
</html>
