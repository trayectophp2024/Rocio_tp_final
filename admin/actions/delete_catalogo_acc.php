<?php

    require_once "../../functions/autoload.php";

    $id = $_GET['id'] ?? FALSE;

    
    $catalogo  = (new Catalogo())->catalogo_x_id($id);
    try {


          $catalogo->delete();

         
        (new Alerta())->add_alerta("danger", "El producto se elimino correctamente");


            header("Location: ../index.php?sec=admin_catalogo");
    } catch (\Exception $e) {
        die("No se pudo eliminar la categoria".  $e);
    }




?>