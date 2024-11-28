<?php

$producto = (new Catalogo())->catalogo_completo();

?>

<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Agregar Nuevo Producto</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/add_productos_acc.php"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="categoria">Categoria</label>
                            <select class="form-select" name="id_catalogo" id="id_catalogo">
                                <option value="" selected disabled>Elija una opcion</option>
                                <?php foreach($producto as $ropa){ ?>
                                        <option value="<?= $ropa->getId() ?>"   ><?= $ropa->getNombre() ?></option>

                                <?php } ?>  
                            </select>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" required>
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="imagen">Imagen:</label>
                            <input type="file" class="form-control" name="imagen" id="imagen">
                        </div>

                        <div class="col-6 mb-3">
                            <label class="form-label" for="talles">Talles:</label>
                            <input type="text" class="form-control" name="talles" id="talles" max="9999" required>
                        </div>

                        
                        <div class="col-12 mb-3">
                            <label class="form-label" for="stock">Stock</label>
                            <input type="number" class="form-control" name="stock" id="stock"  required>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label" for="precioo">Precio</label>
                            <textarea name="precio" id="precio" class="form-control"></textarea>
                          
                        </div>

                        <button type="submit" class="btn btn-primary">Cargar Producto</button>

                        


                </form>  
            </div>
    </div>
</div>