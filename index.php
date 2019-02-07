<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 */
if (!isset($_GET['page']) || empty($_GET['page'])) {
    include_once "controller/connection_controller.php";
include_once "model/connection_sql.php";

    $nom = (isset($_REQUEST['nom'])? $_REQUEST['nom']:null);
    $prenom = (isset($_REQUEST['prenom'])? $_REQUEST['prenom']:null);
    $pseudo = (isset($_REQUEST['pseudo'])? $_REQUEST['pseudo']:null);
    $mail = (isset($_REQUEST['mail'])? $_REQUEST['mail']:null);
    $motdepasse = (isset($_REQUEST['mdp'])? $_REQUEST['mdp']:null);

    $ctrl = new connection_controller();
    $ctrl->inscriptionconn($nom,$prenom,$pseudo,$mail,$motdepasse);
}
?>


