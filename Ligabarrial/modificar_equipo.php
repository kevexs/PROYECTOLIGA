<?php
include "modelo/conexion.php";
$id = $_GET["id"];

$sql = $conexion->query(" select * from where  idEquipos=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MODIFICAR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <form class="col-4 p-3" method="POST">
    <h3 class="text-center text-seconoary">REGISTRO DE EQUIPO</h3>
    <input type="hidden" name="id"value="<?= $_GET["id"]?>">
    <?php
    include "controlador/modicar_producto.php";
    while($datos=$sql->fetch_object()){?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre Equipo</label>
        <input type="text" class="form-control" name="nombre" value="<?= $datos->$nombre?>">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fundacion</label>
        <input type="text" class="form-control" name="fundacion" value="<?= $datos->$fundacion?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Colores</label>
        <input type="text" class="form-control" name="colores" value="<?= $datos->$colores?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Escudo</label>
        <input type="text" class="form-control" name="escudo" value="<?= $datos->$escudo?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" class="form-control" name="direccion" value="<?= $datos->$direccion?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Representante</label>
        <input type="text" class="form-control" name="representante" value="<?= $datos->$representante?>>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Estado</label>
        <input type="text" class="form-control" name="estado" value="<?= $datos->$estado?>>
      </div>

    <?php }

    ?>


    <button type="submit" class="btn btn-primary" name="btnactualizar" value="ok">Registrar</button>
  </form>
</body>

</html>