<?php
    require_once "procesos_retos.php";
?>

<html>
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
        <title>Alta de categorías</title>
    </head>
    <body>
        <div id="contenedorFormularioRetos">	
            <h2 id="titulo">Alta de Retos</h2>
            <form action="procesos/alta.php" method="post" id="formulario">
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

                <label>Profesor:</label><br/>
                <select name="profesor">
                    <?php
                        // $consulta = "SELECT nombre FROM profesores;";
                        // $resultado = $this->$mysqli->query($consulta);
                        
                        // while($mostrar = $resultado -> fetch_array(MYSQLI_ASSOC)){
                        //     echo '<option value="'.$mostrar['nombre'].'">'.$mostrar['nombre'].'</option>';
                        // }
                    ?>
                </select>
                <br/><br/>
                
                <label>Categoria:</label><br/>
                <select name="categoria">
                    <?php
                        // $consulta = "SELECT nombre FROM categorias;";
                        // $resultado = $this->$mysqli->query($consulta);
                        
                        // while($mostrar = $resultado -> fetch_array(MYSQLI_ASSOC)){
                        //     echo '<option value="'.$mostrar['nombre'].'">'.$mostrar['nombre'].'</option>';
                        // }
                    ?>
                </select>
                <br/><br/>
                <input id="boton" type="submit" name="enviar" value="enviar"/><br/><br/>
            </form>
            <a href="../index.php"><p class="volver">VOLVER</p></a>
        </div>
    </body>
</html>
