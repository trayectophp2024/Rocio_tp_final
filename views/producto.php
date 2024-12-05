<?php


$id = $_GET['id'] ?? FALSE;

$miObjetoProducto = new Producto();
$ropa = $miObjetoProducto->producto_x_id($id);

?>

<!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav> -->

<div class="mt-5 mb-3">
    <h2 class="text-center display-1" style="background-color: #D0E8C5;" >Detalles del Producto</h2>
</div>

<div class="row">
     <?php if(isset($ropa)) { ?>
       <div class="col">
            <div class="card mb-5" style="background-color: #FFD0D0">
                <div class="row g-0">
                        <div class="col-5">
                            <img class="img-fluid rounded-start" src="img/<?= $ropa->getImagen()?>" alt="<?= $ropa->getNombre()?>">
                        </div>
                        <div class="col-7 d-flex flex-column p-3 ">
                            <div class="card-body flex-grow-0">
                                <p class="fs-4 m-0 fw-bold text-danger"></p>
                                <h3 class="card-title fs-2 mb-4"><?= $ropa->getNombre() ?></h3>
                                <p class="card-text"><?=$ropa->getDescripcion()?></p>
                                <p class="card-text">Talles disponibles: <?=$ropa->getTalles()?></p>
                                <div class="card-text">Unidades: <?=$ropa->getStock()?></div>
                            </div>

                            <div class="card-body">
                                 <h3 class="card-title fs-6 mb-4 text-danger">Medios de Pago:</h3>
                                 <div class="d-flex">
                                     <i class="fa-brands fa-cc-visa me-3 fs-3 text-info"></i>
                                     <i class="fa-brands fa-cc-mastercard me-3 fs-3 text-warning"></i>
                                     <i class="fa-solid fa-money-bill me-3 fs-3 text-primary-emphasis"></i>
                                     <i class="fa-solid fa-credit-card me-3 fs-3 text-success"></i>
                                  </div>
                            </div>
                            
                            <div class="card-body">
                                <p class="fs-3 mb-3 fw-bold text-center">$<?=$ropa->getPrecio() ?></p>
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-danger w-50 fw-bold">COMPRAR</a>
                                </div>
                            </div>



                        </div>

                </div>

            </div>
       </div>
    <?php } else { ?>
        <h2 class="text-center m-5 text-danger">No se encontro el producto deseado</h2>
    
    <?php } ?>
    

</div>



