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
        $this->connection = new connection_sql();
        $this->connection->inscription($nom, $prenom, $pseudo, $motdepasse, $mail);

    }

    public function login() {

        include "view/login.php";

    }

    public function inscription() {

        include "view/inscription.php";
    }
    public function compare()
    {
        include "view/login.php";
        require_once "model/connection_sql.php";

        $logMdp = isset($_POST['logMdp']);
        $logPseudo = isset($_POST['logPseudo']);

        $this->connection = new connection_sql();
        $this->connection->log($logPseudo, $logMdp);

        //inclure une vue pour confirmer a l'utilisateur qu'il est bien logué

    }

   public function modifEspace() {

        require_once "model/connection_sql.php";

        $this->connection = new connection_sql();
        $this->connection->espaces();

   }


}