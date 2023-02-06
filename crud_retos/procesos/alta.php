<?php
    require_once "../../config.php";
    require_once "../procesos_retos.php";

    $nombre=$_POST['nombre'];
    $dirigido=$_POST['dirigido'];
    $descripcion=$_POST['descripcion'];
    $iniInscripcion=$_POST['iniInscripcion'];
    $finInscripcion=$_POST['finInscripcion'];
    $iniReto=$_POST['iniReto'];
    $finReto=$_POST['finReto'];
    $fechaPublicacion=$_POST['fechaPublicacion'];
    $publicado=0;
    $profesor=1;
    $categoria=1;

    $consulta = new ProcesosRetos();

    if($nombre == ""){
        echo 'No se ha introducido nungún valor. <a href="../formulario_alta.php">VOLVER A INTENTAR</a>';
    }
    else{
        if($consulta->alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria)){
            echo 'Se han añadido correctamente el nombre. <a href="../../index.php">ACEPTAR</a>';
        }
        else{
            echo 'Ha habido un error. <a href="../formulario_alta.php">ACEPTAR</a>';
        }
    }
?>