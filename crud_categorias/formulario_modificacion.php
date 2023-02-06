<?php
    require_once "../config.php";
    require_once "procesos.php";

    // echo $_GET['id'];

    $id = $_GET['id'];

    $consulta = new Procesos();

    $nuevoNombre = $consulta->nuevoNombre($id);
    $array = $nuevoNombre->fetch_array(MYSQLI_ASSOC);
?>

<html>
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        <title>Modificación de categorías</title>
    </head>
    <body>
        <div id="contenedorFormulario">	
            <h2 id="titulo">Modificación de categorías</h2>
            <form action="procesos/modificar.php?id=<?php echo $id; ?>" method="post" id="formulario">
                <label>Nuevo nombre: </label>
                <input id="cajaTexto" name="nombre" value="<?php echo $array["nombre"]?>" type="text" maxlength="80"/>
                <input id="boton" type="submit" name="modificar" value="modificar"/>
            </form>
            <a href="listar.php"><p class="volver">VOLVER</p></a>
        </div>
    </body>
</html>