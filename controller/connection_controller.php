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

    $this->connection = new connection_sql();

}

public function inscriptionconn(){
    $this->connection->inscription();
    include '../view/inscription.php';

}


}