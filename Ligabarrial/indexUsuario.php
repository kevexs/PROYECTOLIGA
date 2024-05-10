<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-3 p-3" method="post" action="loguin.php">
    <h2 class="text-center text-secondary">INICIAR SESIÓN</h2>
<?php
include "Modelo/conexion.php";
include "controlador/loguin.php";

?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">USUARIO</label>
    <input type="text" class="form-control" name="usuario" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CONTRASEÑA</label>
    <input type="password" class="form-control" name="password" required>
  </div>
  
  <button type="submit" class="btn btn-primary" name="btningresar">INICIAR SESIÓN</button>
  <button type="submit" class="btn btn-primary" name="btnregistrarse">REGISTRARSE</button>
  <input type="button" onclick="location='indexCreateRepresentante.php'" />
 
</form>
<?php

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
