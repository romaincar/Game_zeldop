<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 13:17
 */

require_once "../model/connection_sql.php";

$nom = (isset($_POST['nom']) ? $_POST['nom']:null);
filter_var($nom, FILTER_SANITIZE_STRING);

$prenom = (isset($_POST['prenom']) ? $_POST['prenom']:null);
filter_var($prenom, FILTER_SANITIZE_STRING);

$pseudo = (isset($_POST['pseudo']) ? $_POST['pseudo']:null);
filter_var($pseudo, FILTER_SANITIZE_STRING);

$mail = (isset($_POST['mail']) ? $_POST['mail']:null);
filter_var($mail, FILTER_SANITIZE_STRING);

$motdepasse = (isset($_POST['mdp']) ? $_POST['mdp']:null);

$inscription = new connection_sql();
$inscription->inscription($nom, $prenom, $pseudo, $motdepasse, $mail);

