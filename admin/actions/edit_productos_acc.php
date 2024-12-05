<?php

    require_once "../../functions/autoload.php";
   

    $postData = $_POST;

    $id = $_GET['id'] ?? FALSE;

    $fileData = $_FILES['imagen'] ?? FALSE;


    try {

        $producto = new Producto();

        if(!empty($fileData['tmp_name'])){
            if(!empty($postData['imagen_og'])){
                (new Imagen())->borrarImagen(__DIR__ . "/../../img/" . $postData['imagen_og']);
            }

            $imagen = (new Imagen())->subirImagen(__DIR__ . "/../../img/", $fileData);

            $producto->reemplazar_imagen($imagen, $id);
        }


        $producto->edit($postData['nombre'],$postData['id_catalogo'], $postData['descripcion'],$postData['talles'],$postData['stock'],$postData['precio'], $postData['destacado'], $id);

        (new Alerta())->add_alerta("warning", "El producto se edito correctamente");
        header("Location: ../index.php?sec=admin_productos");
    } catch (\Exception $e) {
        die("No se pudo cargar el producto".  $e);
    }

?>