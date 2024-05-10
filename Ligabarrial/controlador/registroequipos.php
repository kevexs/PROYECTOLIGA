<?php
if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["fundacion"]) and !empty($_POST["colores"])and !empty($_POST["escudo"])and !empty($_POST["direccion"]) and !empty($_POST["representante"])and !empty($_POST["estado"])){
      $nombre = $_POST["nombre"];
      $fundacion = $_POST["fundacion"];
      $colores = $_POST["colores"];
      $escudo = $_POST["escudo"];
      $direccion = $_POST["direccion"];
      $representante = $_POST["representante"];
      $estado = $_POST["estado"];
      
      $sql=$conexion->query(" insert into equipos(nombre, fundacion,colores,escudo,direccion,representante,estado)values('$nombre', '$fundacion', '$colores','$escudo','$direccion','$representante','$estado') ");
      
      if($sql==1){
        echo '<div class="alert-success"> Equipo resgistrado correctamente</div>';

       }else{
        echo '<div class="alert-success"> Error al resgristar el equipo</div>';
       }
    }else{
        echo '<div class="alert-warning"> Algunos de los campos estan vacios</div>';
    }
}
?>