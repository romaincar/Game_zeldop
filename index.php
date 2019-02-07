<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 05/02/2019
 */
if (!isset($_GET['page']) || empty($_GET['page'])) {
    require "controller/connection_controller.php";
    include "model/connection_sql.php";

    $ctrl = new connection_controller();
    $ctrl->inscriptionconn();
}
?>


