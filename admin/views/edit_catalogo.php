<?php
    $id = $_GET['id'] ?? FALSE;

    $catalogo = (new Catalogo())->catalogo_x_id($id);

?>

<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Editar Categoria</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/edit_catalogo_acc.php?id=<?= $catalogo->getId()  ?>"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $catalogo->getNombre() ?>"  required>
                        </div>

                        <button type="submit" class="btn btn-warning">Editar Catalogo</button>

                        


                </form>  
            </div>
    </div>
</div>