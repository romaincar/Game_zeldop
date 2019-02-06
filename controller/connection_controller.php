<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/02/2019
 * Time: 09:56
 */


require_once "../model/connection_sql.php";


class connection_controller
{
    private $connection;

    public function __construct()
    {

        $this->connection = new connection_sql();

    }

    public function inscriptionconn($nom, $prenom, $pseudo, $motdepasse, $mail)
    {
        $this->connection->inscription($nom, $prenom, $pseudo, $motdepasse, $mail);
        //include '../view/inscription.php';

    }

    public function compare()
    {

        $this->connection->log();

    }


}