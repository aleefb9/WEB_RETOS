<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        require_once('../index.php');
    }

    require_once('../controlador/controlador_categorias.php');
    $controlador=new controladorCategorias();
    
    $id = $_GET['id'];

    $nuevoNombre = $controlador->nuevoNombre($id);
    $array = $nuevoNombre->fetch_array(MYSQLI_ASSOC);
?>

<html>
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
        <title>Modificación de categorías</title>
    </head>
    <body>
        <div id="contenedorFormulario">	
            <h2 id="titulo">Modificación de categorías</h2>
            <form action="modificar_categoria.php?id=<?php echo $id; ?>" method="post" id="formulario">
                <label>Nuevo nombre: </label>
                <input id="cajaTexto" name="nombre" value="<?php echo $array["nombre"]?>" type="text" maxlength="80"/>
                <input id="boton" type="submit" name="modificar" value="modificar"/>
            </form>
            <?php
                if(isset($_POST['nombre'])){
                    $id=$_GET['id'];
                    $nuevoNombre=$_POST['nombre'];

                    if($nuevoNombre == ""){
                        echo '<p style="color:red">No se ha introducido nungún valor para modificar.</p>';
                    }
                    else{
                        $resultado = $controlador->modificar($id, $nuevoNombre);
                        echo '<p style="color:green">Se ha modificado correctamente el nombre.</p>';
                    }
                }
            ?>
            <a href="listar_categoria.php"><p class="volver">VOLVER</p></a>
        </div>
    </body>
</html>