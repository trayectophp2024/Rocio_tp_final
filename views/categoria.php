<?php


$id_categoria = $_GET['cat'] ?? FALSE;

$miProductoCatalogo = new Producto();

$producto = $miProductoCatalogo->catalogo_x_categoria($id_categoria);


$catalogo = (new Catalogo())->get_x_id($id_categoria); 


?>

<h1 class="text-center my-5 " style="color: #AD88C6;">Catalogo de <?=  $catalogo->getNombre(); ?> </h1>
<div class="row">

    <?php if(count($producto))  {   ?> 
    <?php foreach ($producto as $ropa) { ?>
    <div class="col-3">
        <div class="card mb-3 text-center" style="background-color: #FFD0D0">
            <img src="img/<?=$ropa->getImagen() ?>" class="card-img-top" alt="" >
            <div class="card-body"  style="height:125px; overflow: hidden; background-color: #FFD0D0">
                <p class="fs-6 m-0 fw-bold text-danger"></p>
                <h5 class="card-title"><?=$ropa->getNombre()?></h5>
                <p class="card-text"><?=$ropa->getDescripcion()?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" style="background-color: #FFD0D0"><?=$ropa->getTalles()?></li>
                <li class="list-group-item" style="background-color: #FFD0D0"><?=$ropa->getStock()?></li>
            </ul>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center"></p>
                <a href="index.php?sec=producto&id=<?= $ropa->getId() ?>" class="btn btn-outline-info w-100 fw-bold" >VER MÁS</a>
            </div>

        </div>
    </div>

    <?php } ?>

    <?php }else { ?>
         <div class="col-12">
             <h2 class="text-center text-danger mb-5">No se encontraron Productos</h2>
         </div>
    <?php } ?>
</div>
</div>