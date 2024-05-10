<?php
if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) and !empty($_POST["usuario"]) and !empty($_POST["contra"])){
      $nombre = $_POST["nombre"];
      $usuario = $_POST["usuario"];
      $password = $_POST["contra"];
      
      $sql=$conexion->query(" insert into usuarios(nombre, usuario,contrasena,id_tipo)values('$nombre', '$usuario', '$password','2') ");
      
      if($sql==1){
        echo '<div class="alert-success"> Representante resgistrado correctamente</div>';

       }else{
        echo '<div class="alert-success"> Error al resgristar el eRepresentante</div>';
       }
    }else{
        echo '<div class="alert-warning"> Algunos de los campos estan vacios</div>';
    }
}
?>