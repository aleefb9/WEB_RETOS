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
			<a href="../index.php"><span>INICIO</span></a>
            <a href="listar_reto.php"><span>Retos</span></a>
			<a href="listar_categoria.php"><span>Categorías disponibles</span></a>
		</nav>
		<div id="buscadorRetos">
			<p>BUSCAR POR CATEGORIAS</p>
			<form method="post" action="listar_reto.php">
				<select name="categoria">
					<option value="">Todos</option>
					<?php
                        require_once('../controlador/controlador_categorias.php');
                        $controlador=new controladorCategorias();
                        $resultado=$controlador->listar();

                        foreach($resultado as $mostrar){
                            echo '<option value="'.$mostrar['id'].'">'.$mostrar['nombre'].'</option>';
                        }
                    ?>
				</select>
				<input id="botonBuscar" type="submit" name="buscar" value="buscar"/>
			</form>
		</div>
		<div id="contenedorRetos">
			<?php
				if(isset($_POST['buscar']) AND $_POST['categoria']!=''){

					$categoria = $_POST['categoria'];

					require_once('../controlador/controlador_retos.php');
					$controlador=new controladorRetos();
					$resultado=$controlador->listarFiltrado($categoria);

					if($resultado->num_rows>0){ 
						foreach($resultado as $mostrar){
							echo '	
									<div class="cajasRetos">
										<a href="detalles.php?id='.$mostrar['id'].'">'.$mostrar['nombre'].'</a>
									</div>
								';
						}
					}else{
						echo '
							<h1>No hay retos disponibles</h1>
						';
					}
				}else{
					require_once('../controlador/controlador_retos.php');
					$controlador=new controladorRetos();
					$resultado=$controlador->listar();

					if($resultado->num_rows>0){ 
						foreach($resultado as $mostrar){
							echo '	
									<div class="cajasRetos">
										<a href="detalles.php?id='.$mostrar['id'].'">'.$mostrar['nombre'].'</a>
									</div>
								';
						}
					}else{
						echo '
							<h1>No hay retos disponibles</h1>
						';
					}
				}
			?>
			<div id="anadirReto" class="cajasRetos"><a href="alta_reto.php">+</a></div>
		</div>
	</body>
</html>
