<?php


$id_categoria = $_GET['cat'] ?? FALSE;

$miProductoCatalogo = new Producto();

$producto = $miProductoCatalogo->catalogo_x_categoria($id_categoria);


$catalogo = (new Catalogo())->catalogo_x_id($id_categoria); 


?>
<div class="mt-5 mb-3">
    <h1 class="text-center display-1" style="background-color: #D0E8C5;">Catalogo de <?=  $catalogo->getNombre(); ?></h1>
</div>

<div class="row">

    <?php if(count($producto))  {   ?> 
    <?php foreach ($producto as $ropa) { ?>
        <div class="col-3">
        <div class="card mb-3 text-center" style="background-color: #FFD0D0">
            <img src="img/<?=$ropa->getImagen()?>" class="card-img-top" alt="">
            <div class="card-body">
                <p class="fs-6 m-0 fw-bold text-danger"></p>
                <h5 class="card-title"><?=$ropa->getNombre()?></h5>
                <p class="card-text">Precio: $<?=$ropa->getPrecio()?></p>
            </div>
            <div class="card-body">
                <p class="fs-3 mb-3 fw-bold text-danger text-center"></p>
                <a href="index.php?sec=producto&id=<?= $ropa->getId() ?>" class="btn btn-danger w-100 fw-bold" >VER MÁS</a>
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