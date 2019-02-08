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

<body id="fond_onglet">

<div id = "onglet">
    <h2><?= $_SESSION['username']?></h2>
    <h1 id="titre">Game zeldop  </h1>

    <div id="liens">
        <a  href=""><img id="play" src="../Images/play-game-button-png-2.png" width="100" height="100" alt="Jouer"></a>
        <a id="espace" href="espace_modi_compte.php"><img src="../Images/modif.png" width="80" height="80" alt="modification"></a>
        <a id="logout" href="../logout.php"><img src="../Images/Button-Turn-On-icon.png" width="80" height="80" alt="déconnection"></a>
    </div>






<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/02/2019
 * Time: 10:55
 */


?>

</div>
</body>
</html>
