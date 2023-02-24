<?php 
    /**
     * Enviamos datos al metodo modificar del controlador, si detecta un nombre.
     */

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
            <h2 id="titulo">Modificación de Retos</h2>
            <form action="modificar_reto.php?id=<?php echo $_GET['id']?>" method="post" id="formulario">
                <?php
                    require_once('../controlador/controlador_retos.php');
                    $controlador=new controladorRetos();

                    $id = $_GET['id'];

                    $nuevoReto = $controlador->nuevoReto($id);
                    while($fila=$nuevoReto->fetch_assoc()){
                        $nombre=$fila['nombre'];
                        $dirigido=$fila['dirigido'];
                        $descripcion=$fila['descripcion'];
                        $fechaInicioInscripcion=$fila['fechaInicioInscripcion'];
                        $fechaFinInscripcion=$fila['fechaFinInscripcion'];
                        $fechaInicioReto=$fila['fechaInicioReto'];
                        $fechaFinReto=$fila['fechaFinReto'];
                        $fechaPublicacion=$fila['fechaPublicacion'];
                        $publicado=$fila['publicado'];
                        $idCategoria=$fila['idCategoria'];
                        $idProfesor=$fila['idProfesor'];
                    }
                ?>
                <input id="hidden" name="id" value="<?php echo $id; ?>">
                <label>Nombre:</label><br/>
                <input type="text" name="nombre" value="<?php echo $nombre?>">
                <br/><br/>

                <label>Dirigido:</label><br/>
                <input type="text" name="dirigido" value="<?php echo $dirigido?>">
                <br/><br/>

                <label>Descripcion:</label><br/>
                <textarea name="descripcion"><?php echo $descripcion?></textarea>
                <br/><br/>

                <label>Inicio Inscripcion:</label><br/>
                <input type="datetime_local" name="iniInscripcion" value="<?php echo $fechaInicioInscripcion?>">
                <br/><br/>

                <label>Fin Inscripcion:</label><br/>
                <input type="datetime_local" name="finInscripcion" value="<?php echo $fechaFinInscripcion?>">
                <br/><br/>

                <label>Inicio Reto:</label><br/>
                <input type="datetime_local" name="iniReto" value="<?php echo $fechaInicioReto?>">
                <br/><br/>

                <label>Fin Reto:</label><br/>
                <input type="datetime_local" name="finReto" value="<?php echo $fechaFinReto?>">
                <br/><br/>

                <label>Fecha Publicacion:</label><br/>
                <input type="datetime_local" name="fechaPublicacion" value="<?php echo $fechaPublicacion?>">
                <br/><br/>

                <label>Categoria:</label><br/>
                <select name="categoria">
                    <?php
                        require_once('../controlador/controlador_categorias.php');
                        $controlador=new controladorCategorias();
                        $resultado=$controlador->listar();

                        while($fila=$resultado->fetch_assoc()){
							if($idCategoria==$fila['id']){
                                echo '<option selected value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
                            }else{
								echo '<option value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
							}
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

                        while($fila=$resultado->fetch_assoc()){
							if($idProfesor==$fila['id']){
                                echo '<option selected value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
                            }else{
                                echo '<option value="'.$fila['id'].'">'.$fila['nombre'].'</option>';
                            }
                        }
                    ?>
                </select>
                <br/><br/>

                <label>¿Publicar ahora?</label><br/>
                <select name="publicado">
                    <?php
                        if($publicado==1){
                            echo '<option selected value="1">SI</option>
                                    <option value="0">NO</option>';
                        }else{
                            echo '<option value="1">SI</option>
                                    <option selected value="0">NO</option>';
                        }
                    ?>
                </select>    
                
                <br/><br/>
                <input id="boton" type="submit" name="modificar" value="modificar"/><br/><br/>
            </form>
            <?php
                if(isset($_POST['nombre'])){
                    require_once('../controlador/controlador_retos.php');
                    $controlador=new controladorRetos();
                    
                    $nombre=$_POST['nombre'];
                    $dirigido=$_POST['dirigido'];
                    $descripcion=$_POST['descripcion'];
                    $iniInscripcion=$_POST['iniInscripcion'];
                    $finInscripcion=$_POST['finInscripcion'];
                    $iniReto=$_POST['iniReto'];
                    $finReto=$_POST['finReto'];
                    $fechaPublicacion=$_POST['fechaPublicacion'];
                    $publicado=$_POST['publicado'];
                    $profesor=$_POST['profesor'];
                    $categoria=$_POST['categoria'];

                    if($nombre=="" || $dirigido=="" || $descripcion=="" || $iniInscripcion=="" || $iniInscripcion=="" || $finInscripcion=="" || $iniReto=="" || $finReto=="" || $fechaPublicacion==""){
                        echo '<p style="color:red">Debe intorducir todos los campos</p>';
                    }
                    else{
                        $resultado=$controlador->modificar($_POST);	                        
                        echo '<p style="color:green">Se ha modificado correctamente el reto.</p>';
                    }
                }	
            ?>
            <a href="listar_reto.php"><p class="volver">VOLVER</p></a>
        </div>
        <br/><br/>
    </body>
</html>