<?php
    require_once "conexion.php";
    require_once "procesos.php";

    $id=$_GET['id'];
    $nuevoNombre=$_POST['nombre'];
    $consulta = new Procesos();

    echo $id;
    echo $nuevoNombre;

    if($consulta->modificar($id, $nuevoNombre)){
        header('Location: listar.php');
    }
    else{
        echo 'Ha habido un error. <a href="formulario.php">ACEPTAR</a>';
    }
?>