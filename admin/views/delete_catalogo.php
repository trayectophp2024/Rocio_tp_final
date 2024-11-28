<?php

    $id = $_GET['id'] ?? FALSE;

    $catalogo  = (new Catalogo())->catalogo_x_id($id);

?>

<div class="row my-5 g-3">
        <h1 class="text-center mb-5">¿Está seguro que desea eliminar el producto : <?= $catalogo->getNombre() ?></h1>

        <a href="actions/delete_catalogo_acc.php?id=<?= $catalogo->getId() ?>" class="btn btn-danger d-block">Eliminar</a>


</div>