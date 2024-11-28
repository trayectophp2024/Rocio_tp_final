<?php

    require_once "../../functions/autoload.php";
   



    $id = $_GET['id'] ?? FALSE;

    
    $producto  = (new Producto())->producto_x_id($id);
    try {

       if(!empty($producto->getImagen())){
             (new Imagen())->borrarImagen(__DIR__ . "/../../img/" . $producto->getImagen());
          }

          $producto->delete();

         
            header("Location: ../index.php?sec=admin_productos");
    } catch (\Exception $e) {
        die("No se pudo eliminar el producto".  $e);
    }




?>