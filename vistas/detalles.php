<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de retos</title>
	</head>
	<body>
		<div id="contenedorDetalles">
				<?php
                    $id = $_GET['id'];

                    require_once('../controlador/controlador_retos.php');
                    $controlador=new controladorRetos();
                    $resultado=$controlador->detalles($id);	
                    
					foreach($resultado as $mostrar){
						echo '
                            <h1 id="tituloReto">RETO '.$mostrar['nombreReto'].'</h1>

                            <span>NOMBRE:</span> '.$mostrar['nombreReto'].'<br/>
                            <span>DIRIGIDO:</span> '.$mostrar['dirigido'].'<br/>
                            <span>DESCRIPCIÓN:</span> '.$mostrar['descripcion'].'<br/>
                            <span>FECHA INSCRIPCIÓN:</span> '.$mostrar['fechaInicioInscripcion'].' - '.$mostrar['fechaFinInscripcion'].'<br/>
                            <span>FECHA RETO:</span> '.$mostrar['fechaInicioReto'].' - '.$mostrar['fechaFinReto'].'<br/>
                            <span>PROFESOR ENCARGADO:</span> '.$mostrar['nombreProf'].'<br/>
                            <span>PERTENECE A LA CATEGORÍA:</span> '.$mostrar['nombreCat'].'<br/><br/>';

                        if($mostrar['publicado']==0){
                            echo '<span>PUBLICADO:</span> NO<br/><br/>';
                        }else{
                            echo '<span>PUBLICADO:</span> SI<br/><br/>';
                        }
                        
                        echo'
                            <div id="botonesDetalles">
                                <a href="listar_reto.php"><span class="volver">VOLVER</span></a>
                                <a href="confirmar_borrar_reto.php?id='.$mostrar['idReto'].'&nombre='.$mostrar['nombreReto'].'"><span class="volver">BORRAR</span></a>
                                <a href="modificar_reto.php?id='.$mostrar['idReto'].'"><span class="volver">MODIFICAR</span></a>
                            </div>
                        ';
					}
				?>
		</div>
	</body>
</html>
