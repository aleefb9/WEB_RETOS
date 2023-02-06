<?php
    require_once "../../config.php";
    require_once "../procesos_retos.php";
?>

<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../../css/estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de retos</title>
	</head>
	<body>
		<div id="contenedorDetalles">
				<?php
                    $id = $_GET['id'];
					//Llama a la clase procesos
					$procesos = new ProcesosRetos();
					
					$sql = "SELECT * FROM retos WHERE id=$id;";
					$resultado = $procesos->listar($sql);	

					foreach($resultado as $mostrar){
						echo '
                        
                            <h1 id="tituloReto">RETO '.$mostrar['nombre'].'</h1>

                            <span>NOMBRE:</span> '.$mostrar['nombre'].'<br/>
                            <span>DIRIGIDO:</span> '.$mostrar['dirigido'].'<br/>
                            <span>DESCRIPCIÓN:</span> '.$mostrar['descripcion'].'<br/>
                            <span>FECHA INSCRIPCIÓN:</span> '.$mostrar['fechaInicioInscripcion'].' - '.$mostrar['fechaFinInscripcion'].'<br/>
                            <span>FECHA RETO:</span> '.$mostrar['fechaInicioReto'].' - '.$mostrar['fechaFinReto'].'<br/>
                            <span>FECHA PUBLICACIÓN:</span> '.$mostrar['fechaPublicacion'].'<br/>
                            <span>PROFESOR ENCARGADO:</span> '.$mostrar['idProfesor'].'<br/>
                            <span>PERTENECE A LA CATEGORÍA:</span> '.$mostrar['idCategoria'].'<br/><br/>

                            <div id="botonesDetalles">
                                <a href="../../index.php"><span class="volver">VOLVER</span></a>
                                <a href="../confirmar_borrado.php?id='.$mostrar['id'].'&nombre='.$mostrar['nombre'].'"><span class="volver">BORRAR</span></a>
                                <a href="modificar.php"><span class="volver">MODIFICAR</span></a>
                            </div>
                        ';
					}
				?>
		</div>
	</body>
</html>
