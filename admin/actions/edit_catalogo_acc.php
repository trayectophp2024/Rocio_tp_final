<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $id = $_GET['id'] ?? FALSE;

    try {

        $categoria = new Catalogo();
        
        $categoria->edit($postData['nombre'], $id);

        header("Location: ../index.php?sec=admin_catalogo");
    } catch (\Exception $e) {
        die("No se pudo cargar el producto".  $e);
    }

?>