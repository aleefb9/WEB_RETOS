<?php
    require_once "config.php";
    require_once "procesos.php";

    $id=$_GET['id'];

    $consulta = new Procesos();

    if($consulta->borrar($id)){
        header('Location: listar.php');
    }
    else{
        echo 'Ha ocurrido un error. <a href="formulario.php">ACEPTAR</a>';
    }
?>