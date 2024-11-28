<?php

    $id = $_GET['id'] ?? FALSE;

    $producto  = (new Producto())->producto_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el producto : <?= $producto->getNombre() ?></h1>

        <a href="actions/delete_productos_acc.php?id=<?= $producto->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>