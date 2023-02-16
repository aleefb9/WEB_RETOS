<?php
    require_once('../controlador/controlador_categorias.php');
    $controlador=new controladorCategorias();
?>

<html>
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
        <title>Alta de categorías</title>
    </head>
    <body>
        <div id="contenedorFormulario">	
            <h2 id="titulo">Alta de categorías</h2>
            <form action="alta_categoria.php" method="post" id="formulario">
                <label>Nombre Categoría: </label>
                <input id="cajaTexto" name="nombre" type="text" maxlength="80"/>
                <input id="boton" type="submit" name="enviar" value="enviar"/>
            </form>
            <?php
                if(isset($_POST['nombre'])){
                    $nombre=$_POST['nombre'];

                    if($nombre == ""){
                        echo '<p style="color:red">No se ha introducido nungún valor.</p>';
                    }
                    else{
                        $resultado= $controlador->alta($nombre);
                        echo '<p style="color:green">Se ha añadido correctamente el nombre.</p>';
                    }
                }		
            ?>
            <a href="listar_categoria.php"><p class="volver">VOLVER</p></a>
        </div>
    </body>
</html>
