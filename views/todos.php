<?php

require_once 'functions/autoload.php';
/* require de productos */

$miProductoCatalogo = new Producto();

$productos = $miProductoCatalogo->catalogo_completo();

/* var_dump($productos); */

?>

<h1 class="text-center my-5 ">Todos los productos</h1>

<div class="row">

<?php    if(count($productos))  {   ?> 
    <?php foreach ($productos as $ropa) { ?>
    
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