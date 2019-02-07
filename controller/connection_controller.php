<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 09:56
 */



class connection_controller
{
    private $connection;

    public function __construct()
    {

    }

    public function inscriptionconn()
    {
        include "view/inscription.php";
        require_once "model/connection_sql.php";
        $nom = (isset($_REQUEST['nom'])? $_REQUEST['nom']:null);
        $prenom = (isset($_REQUEST['prenom'])? $_REQUEST['prenom']:null);
        $pseudo = (isset($_REQUEST['pseudo'])? $_REQUEST['pseudo']:null);
        $mail = (isset($_REQUEST['mail'])? $_REQUEST['mail']:null);
        $motdepasse = (isset($_REQUEST['mdp'])? $_REQUEST['mdp']:null);
        $this->connection = new connection_sql();
        $this->connection->inscription($nom, $prenom, $pseudo, $motdepasse, $mail);

    }

    public function compare()
    {

        $this->connection->log();

    }


}