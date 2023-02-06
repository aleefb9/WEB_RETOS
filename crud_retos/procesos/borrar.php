<?php
    require_once "../../config.php";
    require_once "../procesos_retos.php";

    $id=$_GET['id'];

    $consulta = new ProcesosRetos();

    if($consulta->borrar($id)){
        header('Location: ../../index.php');
    }
    else{
        echo 'Ha ocurrido un error al borrar. <a href="detalles.php">ACEPTAR</a>';
    }
        
?>