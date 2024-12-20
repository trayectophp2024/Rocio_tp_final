<?php

/* $seccion = $_GET['sec'] ?? "home"; */

require_once '../functions/autoload.php';


$secciones_validas = [
  "login" => [
    "titulo" => "Inicio de Session",
    "restringido" => FALSE,
  ],
   "dashboard" => [
      "titulo" => "Panel de Control",
      "restringido" => TRUE,
   ],
   "admin_productos" => [
    "titulo" => "Administrado de productos",
    "restringido" => TRUE,
   ],
   "add_productos" => [
    "titulo" => "Agregar Productos",
    "restringido" => TRUE,
   ],
   "edit_productos" => [
    "titulo" => "Editor de Productos",
    "restringido" => TRUE,
   ],
   "delete_productos" => [
    "titulo" => "Borrar producto",
    "restringido" => TRUE,
   ],
   "admin_catalogo"=> [
    "titulo" => "Administracion de catalogo",
    "restringido" => TRUE,
   ],
   "add_catalogo" => [
    "titulo" => "Agregar Categoria",
    "restringido" => TRUE,
   ],
   "edit_catalogo" => [
    "titulo" => "Editar Categoria",
    "restringido" => TRUE,
   ],
   "delete_catalogo" => [
    "titulo" => "Borrar Categoria",
    "restringido" => TRUE,
   ]
  ];


  $seccion = $_GET['sec'] ?? "dashboard";

  if(!array_key_exists($seccion, $secciones_validas)){
      $vista= "404";
      $titulo = "404 - pagina no encontrada";
  }else {
     $vista= $seccion;
     if ($secciones_validas[$seccion]['restringido']) {
      (new Autenticacion())->verify();
         }
         $titulo = $secciones_validas[$seccion]['titulo'];
  }

  $userData = $_SESSION['loggedIn'] ?? FALSE;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lopz Indumentaria :: <?= $titulo  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body style="background-color: #B6E2A1;">
  <div class="p-3 mb-2 bg-black text-white">
  <nav class="navbar navbar-expand-lg  "> 
  <div class="container-fluid ">
    <a class="navbar-brand text-white" href="../index.php" target="_blank"><img width="50" height="50" src="../img/logo.png" alt=""> <span style="color: #E493B3;">Lopz</span> Indumentaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link <?= $userData ? "" : "d-none" ?> active text-white" aria-current="page" href="index.php?sec=dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $userData ? "" : "d-none" ?> active text-white" aria-current="page" href="index.php?sec=admin_productos">Admin de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $userData ? "" : "d-none" ?> active text-white" aria-current="page" href="index.php?sec=admin_catalogo">Admin de Catalogo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?= $userData ? "d-none" : "" ?> active text-white" aria-current="page" href="index.php?sec=login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= $userData ? "" : "d-none" ?> active text-white" aria-current="page" href="actions/auth_logout.php">LogOut</a>
        </li>
       
       
      </ul>
    </div>
  </div>
</nav>
</div>


        <!-- require "views/$seccion.php"; -->
        <main class="container">
          <?php
            require file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php"
          ?>
        </main>


  <footer class="d-flex justify-content-around p-3 mb-2 bg-black text-white">
        <div class="Redes">Comunicate con nosotros</div>
        <a href="https://www.instagram.com/indumentaria.lopz/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100069677437712" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <p><i class="fa-solid fa-envelope"></i> lopz.indumentaria@gmail.com</p> 
        </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>