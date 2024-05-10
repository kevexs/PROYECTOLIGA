<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("delete from equipos idEquipos=$id ");
    if($sql==1){
        echo '<div>Equipo eliminado correctamente</div>';
    }else{
        echo '<div>Error al eliminar</div>';
    }
}
?>
