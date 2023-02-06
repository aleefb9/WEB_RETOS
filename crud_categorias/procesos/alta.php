<?php
    require_once "../../config.php";
    require_once "../procesos.php";

    $nombre=$_POST['nombre'];
    $consulta = new Procesos();

    if($nombre == ""){
        echo 'No se ha introducido nungún valor. <a href="../formulario.php">VOLVER A INTENTAR</a>';
    }
    else{
        if($consulta->alta($nombre)){
            echo 'Se han añadido correctamente el nombre. <a href="../listar.php">ACEPTAR</a>';
        }
        else{
            echo 'Ha habido un error. <a href="../formulario.php">ACEPTAR</a>';
        }
    }
?>