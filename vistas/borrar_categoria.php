<?php
    $id=$_GET["id"];
    require_once('../controlador/controlador_categorias.php');
    $controlador=new controladorCategorias();

    $resultado=$controlador->borrar($id);
?>