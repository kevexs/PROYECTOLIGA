<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>

<h1 class="text-center">EQUIPOS</h1>
<?php
 include "modelo/conexion.php";
include "controlador/eliminarequipo.php";
?>
<div class="contaner-fluid row">
<form class="col-4 p-3" method="POST">
    <h3 class="text-center text-seconoary">REGISTRO DE EQUIPO</h3>
    <?php
   
    include "controlador/registroequipos.php";
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre Equipo</label>
    <input type="text" class="form-control" name="nombre" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fundacion</label>
    <input type="text" class="form-control" name="fundacion" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Colores</label>
    <input type="text" class="form-control" name="colores">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Escudo</label>
    <input type="text" class="form-control" name="escudo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Representante</label>
    <input type="text" class="form-control" name="representante">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Estado</label>
    <input type="text" class="form-control" name="estado">
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form> 
</div>
<div class="col-8 p-4">
<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fundacion</th>
      <th scope="col">Colores</th>
      <th scope="col">Escudo</th>
      <th scope="col">Direccion</th>
      <th scope="col">Representante</th>
      <th scope="col">Estado</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    
    $sql=$conexion->query("select * from equipos");
    while($datos=$sql->fetch_object()){?>
      
    <tr>
      <td><?= $datos->idEquipos?></td>
      <td><?= $datos->nombre?></td>
      <td><?= $datos->fundacion?></td>
      <td><?= $datos->colores?></td>
      <td><?= $datos->escudo?></td>
      <td><?= $datos->direccion?></td>
      <td><?= $datos->representante?></td>
      <td><?= $datos->estado?></td>
      <td>
        <a href="modificar_equipo.php?id=<?=$datos->idEquipos?>" class="btn btn-small btn-warning">Editar</a>
        <a href="Index.php?id=<?=$datos->idEquipos?>" class="btn btn-small btn-danger">Eliminar </a>
        
      </td>
    </tr>
 
    <?php }
?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>
