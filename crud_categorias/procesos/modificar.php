<?php
    require_once "../../config.php";
    require_once "../procesos.php";

    $id=$_GET['id'];
    $nuevoNombre=$_POST['nombre'];
    $consulta = new Procesos();

    // echo $id;
    // echo $nuevoNombre;
    if($nuevoNombre == ""){
        echo 'No se introdujo un  valor para modificar. <a href=../listar.php>VOLVER A INTENTAR</a>';
    }
    else{
        if($consulta->modificar($id, $nuevoNombre)){
            header('Location: ../listar.php'); //Redireccionamos a la página listar después de la modificación si todo ha ido correctamente
        }
        else{
            echo 'Ha habido un error. <a href="../formulario.php">ACEPTAR</a>';
        }
    }
?>