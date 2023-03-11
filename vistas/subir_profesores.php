<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        require_once('../index.php');
    }
?>

<html>
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
        <title>Alta de categorías</title>
    </head>
    <body>
        <div id="contenedorFormularioRetos">	
            <h2 id="titulo">Añadir profesores</h2>
            <form action="inserccion_prof.php" method="post" id="formulario" enctype="multipart/form-data">
                <label>Añadir archivo:</label><br/>
                <input name="archivo" type="file">
                <input name="enviar" type="submit">
            </form>
        </div>
    </body>
</html>