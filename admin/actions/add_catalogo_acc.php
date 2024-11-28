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

        (new Catalogo())->insert($postData['nombre']);

        header("Location: ../index.php?sec=admin_catalogo");
    } catch (\Exception $e) {
        die("No se pudo cargar el Catalogo".  $e);
    }




?>