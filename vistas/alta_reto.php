<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        require_once('../index.php');
    }

    $idProfesor=$_SESSION['id'];

    require_once('../controlador/controlador_retos.php');
    $controlador=new controladorRetos();
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
                <input type="text" name="nombre">
                <br/><br/>

                <label>Dirigido:</label><br/>
                <input type="text" name="dirigido">
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

                <label>¿Publicar ahora?</label><br/>
                <select name="publicado">
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                </select>    
                
                <br/><br/>
                <input id="boton" type="submit" name="enviar" value="enviar"/><br/><br/>
            </form>
            <?php
                require_once('../controlador/controlador_retos.php');
                $controlador=new controladorRetos();
                
                if(isset($_POST['nombre'])){
                    
                    $nombre=$_POST['nombre'];
                    $dirigido=$_POST['dirigido'];
                    $descripcion=$_POST['descripcion'];
                    $iniInscripcion=$_POST['iniInscripcion'];
                    $finInscripcion=$_POST['finInscripcion'];
                    $iniReto=$_POST['iniReto'];
                    $finReto=$_POST['finReto'];
                    $fechaPublicacion=$_POST['fechaPublicacion'];
                    $publicado=$_POST['publicado'];
                    $profesor=$idProfesor;
                    $categoria=$_POST['categoria'];

                    if($nombre=="" || $dirigido=="" || $descripcion==""){
                        echo '<p style="color:red">Debe introducir todos los campos</p>';
                    }
                    else{
                        $resultado=$controlador->alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria);
                        echo '<p style="color:green">Se ha añadido correctamente el reto.</p>';
                    }
                }		
            ?>
            <a href="listar_reto.php"><p class="volver">VOLVER</p></a>
        </div>
    </body>
</html>
