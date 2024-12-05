<?php
    $id = $_GET['id'] ?? FALSE;

    $producto = (new Producto())->producto_x_id($id);
    $categoria = (new Catalogo())->catalogo_completo();

?>

<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Editar Producto</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/edit_productos_acc.php?id=<?= $producto->getId()  ?>"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $producto->getNombre() ?>"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="id_serie">Catalogo</label>
                            <select class="form-select" name="id_catalogo" id="id_catalogo">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($categoria as $c){ ?>
                                        <option value="<?= $c->getId() ?>" <?= $c->getId() == $producto->getId_catalogo() ? "selected" : ""?>><?= $c->getNombre()?></option>

                                <?php } ?>  


                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $producto->getDescripcion() ?>" required>
                        </div>



                        <div class="col-2 mb-3">
                            <label class="form-label" for="imagen">Imagen Actual:</label>
                            <img width="150px" src="../img/<?= $producto->getImagen()?>" alt="" class="img-fluid">
                            <input type="hidden" class="form-control" name="imagen_og" id="imagen_og" value="<?= $producto->getImagen() ?>">
                        </div>

                        <div class="col-4 mb-3">
                            <label class="form-label" for="imagen">Reemplazar Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="talles">Talles:</label>
                            <input type="text" class="form-control" name="talles" id="talles"required  value="<?= $producto->getTalles() ?>">
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="stock">Stock:</label>
                            <input type="number" class="form-control" name="stock" id="stock" value="<?= $producto->getStock() ?>"  required>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="precio">Precio:</label>
                            <textarea name="precio" id="precio" class="form-control"><?= $producto->getPrecio() ?></textarea>
                          
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="destacado">Destacado:</label>
                            <input type="text" class="form-control" name="destacado" id="destacado"required  value="<?= $producto->getDestacado() ?>">
                            <div class="form-text">En caso de ser Jean poner 1, Remera poner 2, Campera poner 3, en caso de no destacar poner 0</div>
                        </div>

                        <button type="submit" class="btn btn-warning">Editar Producto</button>

                        


                </form>  
            </div>
    </div>
</div>