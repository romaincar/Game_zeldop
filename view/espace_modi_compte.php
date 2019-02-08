<?php
session_start();
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

    <?php

    if ($_SESSION['admin'] == 0) {


            ?>

<div id = 'infosCompte'>

    <h1>vos informations de compte</h1>

    <ul>
            <li>Votre nom : <?php echo $_SESSION['nom']; ?></li>
            <li>Votre Prenom : <?php echo $_SESSION['prenom']; ?></li>
            <li>Votre Pseudo : <?php echo $_SESSION['pseudo']; ?></li>
            <li>Votre Mail : <?php echo $_SESSION['mail']; ?></li>

    </ul>
</div>
            <?php



    }

?>

    <?php

    if ($_SESSION['admin'] == 1) {

    ?>
<div id="inscription">
    <h1>Espace modification ! </h1>

        ?>
        <div>
            <a href="delete.php?id=<?= $_SESSION['id'] ?>"><img src="supprimer.png" height="40" width="40" alt="Supprimer"></a> <a
                    href="modification.php?id=<?php echo $_SESSION['id'] ?>"><img src="modifier.png" height="40"
                                                                                 width="40" alt="Modifier"></a>
            <label id="nom" class="grpnom">Votre Nom : </label>
            <div class="grpnom" id="echonom"><?php echo $_SESSION['nom'] ?></div>
            <br>
            <label id="prenom" class="grpprenom">Votre Prenom : </label>
            <div class="grpprenom" id="echoprenom"><?php echo $_SESSION['prenom']  ?></div>
            <br>
            <label id="mail" class="grpmail">Votre e-mail : </label>
            <div class="grpmail" id="echomail"><?php echo $_SESSION['mail'] ?></div>
            <br>
            <label id="mdp" class="grpmdp">Votre mot de passe : </label>
            <div class="grpmdp" id="echomdp"><?php echo $_SESSION['mdp'] ?></div>
            <br>
            <input id="mod" type="submit" value="modifier">
            <br>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
