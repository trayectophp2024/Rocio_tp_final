<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $fileData = $_FILES['imagen'];


 /*    echo "<pre>";
    print_r($fileData);
    echo "</pre>";
 */

/*   echo time();


    die(); */ 

    /*     echo "<pre>";
     print_r($postData);
    echo "</pre>"; */



    try {

        $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/", $fileData);

        (new Producto())->insert($postData['nombre'], $postData['id_catalogo'], $postData['descripcion'],$postData['talles'],$postData['stock'],$postData['precio'], $postData['destacado'], $imagen);

        (new Alerta())->add_alerta("success", "El producto se cargo correctamente");

        header("Location: ../index.php?sec=admin_productos");
    } catch (\Exception $e) {
        die("No se pudo cargar el producto".  $e);
    }




?>