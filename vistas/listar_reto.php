<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de retos</title>
	</head>
	<body>
		<header>
			<h1>WEB RETOS</h1>
		</header>
		<nav>
            <a href="listar_reto.php"><span>Retos</span></a>
			<a href="listar_categoria.php"><span>Categorías disponibles</span></a>
		</nav>
		<div id="contenedorRetos">
				<?php
					require_once('../controlador/controlador_retos.php');
                    $controlador=new controladorRetos();
                    $resultado=$controlador->listar();

					foreach($resultado as $mostrar){
						echo '	
								<div class="cajasRetos">
									<a href="detalles.php?id='.$mostrar['id'].'">'.$mostrar['nombre'].'</a>
								</div>
							';
					}
				?>
			<div id="anadirReto" class="cajasRetos"><a href="alta_reto.php">+</a></div>
		</div>
	</body>
</html>
