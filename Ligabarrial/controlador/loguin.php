<?php

include "C:/xampp/htdocs/Ligabarrial/Modelo/conexion.php";


    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        
        $sql = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$password'");
        
        if ($datos = $sql->fetch_object()) {
            header("Location:../indexCreateRepresentante.php", true, 301);
            exit();
        } else {
            echo "<div class='alert alert-danger'>Por favor ingrese usuario y contraseña</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Acceso Denegado</div>";
    }

?>
