<?php

    require_once "../../functions/autoload.php";
    
    $posData = $_POST;
    $login = (new autenticacion())->log_in($posData['username'], $posData['pass']);

    (new Alerta())->add_alerta("success", "Se inicio sesion correctamente");

    if ($login) {
        header('Location: ../index.php?sec=dashboard');
    }else {
        header('Location: ../index.php?sec=login');
    }

?>