<?php
    $id=$_GET["id"];
    require_once('../controlador/controlador_retos.php');
    $controlador=new controladorRetos();

    $resultado=$controlador->borrar($id);
?>