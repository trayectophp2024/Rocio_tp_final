<?php
$productos = (new Producto())->catalogo_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Productos</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Talles</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($productos as $ropa){  ?>

                    <tr>
                        <td><img width="150px" src="../img/<?= $ropa->getImagen()?>" alt="<?= $ropa->getNombre()?>" class="img-fluid rounded" alt=""></td>
                        <th scope="row"><?=  $ropa->getId() ?></th>
                        <td><?=  $ropa->getNombre() ?></td>
                        <td><?=  $ropa->getDescripcion() ?></td>
                        <td><?=  $ropa->getTalles() ?></td>
                        <td><?=  $ropa->getstock() ?></td>
                        <td><?=  $ropa->getPrecio() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_productos&id=<?= $ropa->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_productos&id=<?= $ropa->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-primary mt-5" href="index.php?sec=add_productos">Cargar Nuevo Producto</a>

        </div>
    </div>

</div>