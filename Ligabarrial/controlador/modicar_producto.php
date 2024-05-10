<?php
if (!empty($_POST["btnactualizar"])){
    if(!empty($_POST["nombre"])and !empty($_POST["fundacion"]) and !empty($_POST["colores"])and !empty($_POST["escudo"])and !empty($_POST["direccion"])and !empty($_POST["representante"]) and !empty($_POST["estado"])){
$id=$_POST["id"];    
$nomnbre=$_POST["nombre"];
$fundacion=$_POST["fundacion"];
$colores=$_POST["colores"];
$escudo=$_POST["escudo"]; 
$direccion=$_POST["direccion"];
$representante=$_POST["representante"];
$estado=$_POST["estado"];
$sql=$conexion->query("update equipos set nombre='$nombre', fundacion='$fundacion', colores='$colores', escudo='$escudo', direccion='$direccion', representante='$representante', estado='$estado' where idEquipos=$id");
    if($sql==1){
        header("location:Index.php");
    }else{
        echo "<div class='alert alert-danger'>Error al modificar</div>";
    }
}else{
        echo "<div class='alert alert-warning'>campos vacios</div>";

    }

    }