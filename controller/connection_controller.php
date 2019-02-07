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

    public function compare()
    {

        $this->connection->log();

    }


}