<?php
$miObjetoBici = new Producto();
$productos = $miObjetoBici->destacadoJean();
$productos2 = $miObjetoBici->destacadoRemeras();
$productos3 = $miObjetoBici->destacadoCamperas();
?>


<style>
 body{
  background-color: #B6E2A1;
 }
</style>
<img src="img/banner.webp" class="img-fluid" alt="...">

<div class="mt-5 mb-3">
    <h2 class="text-center" style="background-color: #D0E8C5;">Jeans Destacados</h2>
</div>

<div class="row">
    <?php foreach ($productos as $ropa) { ?>
        <div class="col-3 mb-3">
            <div class="card text-center" style="background-color: #FFD0D0">
                <img src="img/<?=$ropa->getImagen()?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?=$ropa->getNombre()?></h5>
                    <p class="card-text">Precio: $<?=$ropa->getPrecio()?></p>
                </div>
                <div class="card-body">
                    <a href="index.php?sec=producto&id=<?= $ropa->getId() ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                </div>
            </div>
        </div>
    <?php } ?>
    

</div>
<div class="d-flex justify-content-center">
<a href="index.php?sec=categoria&cat=1" class="btn btn  fw-bold fs-4" style="text-decoration: none; color:white; background-color: #79AC78;">Ver más Jeans</a>
</div>


<div class="mt-5 mb-3">
    <h2 class="text-center" style="background-color: #D0E8C5;" >Remeras Destacados</h2>
</div>

<div class="row">
    <?php foreach ($productos2 as $ropa) { ?>
        <div class="col-3 mb-3">
            <div class="card text-center" style="background-color: #FFD0D0">
                <img src="img/<?=$ropa->getImagen()?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?=$ropa->getNombre()?></h5>
                    <p class="card-text">Precio: $<?=$ropa->getPrecio()?></p>
                </div>
                <div class="card-body">
                    <a href="index.php?sec=producto&id=<?= $ropa->getId() ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<div class="d-flex justify-content-center">
<a href="index.php?sec=categoria&cat=1" class="btn btn  fw-bold fs-4" style="text-decoration: none; color:white; background-color: #79AC78;">Ver más Remeras</a>
</div>

<div class="mt-5 mb-3">
    <h2 class="text-center" style="background-color: #D0E8C5;">Camperas Destacadas</h2>
</div>

<div class="row">
    <?php foreach ($productos3 as $ropa) { ?>
        <div class="col-3 mb-3">
            <div class="card text-center" style="background-color: #FFD0D0">
                <img src="img/<?=$ropa->getImagen()?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?=$ropa->getNombre()?></h5>
                    <p class="card-text">Precio: $<?=$ropa->getPrecio()?></p>
                </div>
                <div class="card-body">
                    <a href="index.php?sec=producto&id=<?= $ropa->getId() ?>" class="btn btn-danger w-100 fw-bold">VER MÁS</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div class="d-flex justify-content-center">
<a href="index.php?sec=categoria&cat=1" class="btn btn  fw-bold fs-4" style="text-decoration: none; color:white; background-color: #79AC78;">Ver más Camperas</a>
</div>



<div class="mt-1 mb-5">
<h2 class="text-center m-4" style="background-color: #D0E8C5;">Todos los productos</h2>

        <a href="index.php?sec=todos">
            <img width="400" class="d-block mx-auto" src="img/catalogo.webp" alt="">
        </a>

</div>
