<div class="row -my-5">
    <div class="col">
            <h1 class="text-center mb-5">Agregar Nueva Categoria</h1>

            <div class="row mb-5 d-flex align-items-center">
                  <form class="row g-3" action="actions/add_catalogo_acc.php"  method="POST" enctype="multipart/form-data">

                        <div class="col-6 mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"  required>
                        </div>

                        <button type="submit" class="btn btn-primary">Cargar Catalogo</button>

                        


                </form>  
            </div>
    </div>
</div>