<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 */



if (isset($_GET['page'])) {

    switch($_GET['page'])
    {
        case "login":

            //  include "model/connection_sql.php";
           // include "view/login.php";

            require_once "controller/connection_controller.php";

            $nouv = new connection_controller();
            $nouv->login();

            break;

            case "inscription":

                require "controller/connection_controller.php";

    }

}


else{

    //Page d'index

    require_once "controller/connection_controller.php";
    include "model/connection_sql.php";

    $ctrl = new connection_controller();
    $ctrl->inscriptionconn();

}





switch(isset($_POST['action']))
{

    case "login":

         require_once "controller/connection_controller.php";
         include "model/connection_sql.php";

         $nouv = new connection_controller();


        $nouv->compare();
        break;

}


