<?php
    require_once('../controlador/controlador_retos.php');
    $controlador=new controladorRetos();

    $id = $_GET['id'];

    $nuevoReto = $controlador->nuevoReto($id);
    $array = $nuevoReto->fetch_array(MYSQLI_ASSOC);
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
            <h2 id="titulo">Alta de Retos</h2>
            <form action="" method="post" id="formulario">
                <label>Nombre:</label><br/>
                <input type="text" name="nombre" value="<?php echo $array["nombre"]?>">
                <br/><br/>

                <label>Dirigido:</label><br/>
                <input type="text" name="dirigido" value="<?php echo $array["dirigido"]?>">
                <br/><br/>

                <label>Descripcion:</label><br/>
                <textarea name="descripcion"></textarea>
                <br/><br/>

                <label>Inicio Inscripcion:</label><br/>
                <input type="date" name="iniInscripcion">
                <br/><br/>

                <label>Fin Inscripcion:</label><br/>
                <input type="date" name="finInscripcion">
                <br/><br/>

                <label>Inicio Reto:</label><br/>
                <input type="date" name="iniReto">
                <br/><br/>

                <label>Fin Reto:</label><br/>
                <input type="date" name="finReto">
                <br/><br/>

                <label>Fecha Publicacion:</label><br/>
                <input type="date" name="fechaPublicacion">
                <br/><br/>

                <label>Categoria:</label><br/>
                <select name="categoria">
                    <?php
                        require_once('../controlador/controlador_categorias.php');
                        $controlador=new controladorCategorias();
                        $resultado=$controlador->listar();

                        foreach($resultado as $mostrar){
                            echo '<option value="'.$mostrar['id'].'">'.$mostrar['nombre'].'</option>';
                        }
                    ?>
                </select>
                <br/><br/>

                <label>Profesor:</label><br/>
                <select name="profesor">
                    <?php
                        require_once('../controlador/controlador_retos.php');
                        $controlador=new controladorRetos();
                        $resultado=$controlador->listarProfesor();

                        foreach($resultado as $mostrar){
                            echo '<option value="'.$mostrar['id'].'">'.$mostrar['nombre'].'</option>';
                        }
                    ?>
                </select>
                
                <br/><br/>
                <input id="boton" type="submit" name="enviar" value="enviar"/><br/><br/>
            </form>
            <a href="listar_reto.php"><p class="volver">VOLVER</p></a>
        </div>
    </body>
</html>