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
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de retos</title>
	</head>
    <body>
        <?php
            /**
             * Confirmación del borrado de categorías
             */
            if(isset($_GET["id"]))
            {
                echo'
                    <div class="confirmarBorrado">
                        <p>Realmente desea ELIMINAR la categoría '.$_GET["nombre"].'?</p>
                        <a id="btnCancelar" href="listar_categoria.php">Cancelar</a> <a id="btnEliminar" href="borrar_categoria.php?id='.$_GET["id"].'">Eliminar</a>
                    </div>
                ';
            }
        ?>
    </body>
</html>