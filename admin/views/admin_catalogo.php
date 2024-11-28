<?php
$categoria = (new Catalogo())->catalogo_completo();

/* echo "<pre>";
    print_r($personaje);
    echo "</pre>"; */

?>


<div class="row my-5">
    <div class="col">
        <h1 class="text-center mb-5">Administracion de Categorias</h1>
        <div class="row mb-5 d-flex align-items-center">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php  foreach($categoria as $cat){  ?>

                    <tr>
                        <th scope="row"><?=  $cat->getId() ?></th>
                        <td><?=  $cat->getNombre() ?></td>
                        <td>
                            <a class="btn btn-warning" href="index.php?sec=edit_catalogo&id=<?= $cat->getId() ?>">Editar</a>

                            <a class="btn btn-danger mt-2" href="index.php?sec=delete_catalogo&id=<?= $cat->getId() ?>">Eliminar</a>
                        </td>
                    </tr>

                <?php  } ?>   
                    
                </tbody>
            </table>

                    <a class="btn btn-primary mt-5" href="index.php?sec=add_categorias">Cargar Nuevo Categoria</a>

        </div>
    </div>

</div>