<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGRISTRO DE USUARIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>

<h1 class="text-center">USUARIO</h1>
<?php
 include "modelo/conexion.php";
include "controlador/registrarRepresentante.php";
?>
<div class="contaner-fluid row">
<form class="col-4 p-3" method="POST" >
    <h3 class="text-center text-seconoary">REGISTRO DE USUARIO</h3>
    <?php
   
    include "controlador/registroequipos.php";
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="text" class="form-control" name="usuario">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
    <input type="text" class="form-control" name="contra">
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
  <style>
    /* Estilos para el enlace */
    .link-equipo {
        text-decoration: none; /* Quitar subrayado */
        color: #007bff; /* Color del texto */
        font-weight: bold; /* Texto en negrita */
        font-size: 16px; /* Tamaño de fuente */
        padding: 10px 20px; /* Espaciado interno */
        border: 2px solid #007bff; /* Borde del enlace */
        border-radius: 5px; /* Borde redondeado */
        background-color: transparent; /* Color de fondo transparente */
        transition: background-color 0.3s, color 0.3s; /* Transición suave */
    }

    /* Estilos cuando el mouse pasa sobre el enlace */
    .link-equipo:hover {
        background-color: #007bff; /* Cambiar color de fondo */
        color: #fff; /* Cambiar color del texto */
    }
</style>

<a href="index.php" class="link-equipo">EQUIPO</a>


</form> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>