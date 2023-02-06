<?php
    require_once "config.php";
    require_once "crud_retos/procesos_retos.php";
?>

<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de retos</title>
	</head>
	<body>
		<header>
			<h1>WEB RETOS</h1>
		</header>
		<nav>
			<a href="index.php"><span>Retos</span></a>
			<a href="crud_categorias/listar.php"><span>Categorías disponibles</span></a>
		</nav>
		<div id="contenedorRetos">
				<?php
					//Llama a la clase procesos
					$procesos = new ProcesosRetos();
					
					$sql = "SELECT * FROM retos;";
					$resultado = $procesos->listar($sql);	

					foreach($resultado as $mostrar){
						echo '	
								<div class="cajasRetos">
									<a href="crud_retos/procesos/detalles.php?id='.$mostrar['id'].'">'.$mostrar['nombre'].'</a>
								</div>
							';
					}
				?>
			<div id="anadirReto" class="cajasRetos"><a href="crud_retos/formulario_alta.php">+</a></div>
		</div>
	</body>
</html>


