<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de categorías</title>
	</head>
	<body>
        <header>
                <h1>WEB RETOS</h1>
		</header>
		<nav>
			<a href="listar_reto.php"><span>Retos</span></a>
			<a href="listar_categoria.php"><span>Categorías disponibles</span></a>
		</nav>
		<div id="contenedorTabla">
			<a href="alta_categoria.php"><p id="aniadir">AÑADIR CATEGORÍAS</p></a>
			<table id="tablaCategoriaS">
				<thead>
					<th>ID</th>
					<th>NOMBRE CATEGORÍA</th>
					<th>BORRAR</th>
					<th>MODIFICAR</th>
				</thead>
				<tbody>
					<?php
						require_once('../controlador/controlador_categorias.php');
						$controlador=new controladorCategorias();
						$resultado=$controlador->listar();

						if($resultado!=''){ 
							foreach($resultado as $mostrar){
								echo '<tr>	
										<td>'.$mostrar['id'].'</td>
										<td>'.$mostrar['nombre'].'</td>
										<td><a href="confirmar_borrar_categoria.php?id='.$mostrar["id"].'&nombre='.$mostrar["nombre"].'"><i class="material-icons">delete</i></a></td>
										<td><a href="modificar_categoria.php?id='.$mostrar["id"].'"><i class="material-icons">edit</i></a></td>
									</tr>';
							}
					?>
				</tbody>
			</table>
			<?php
				}else{
					echo "
						<h1>No hay categorías</h1>
					";
				}
			?>
			<a href="alta_categoria.php"><p id="aniadir">AÑADIR CATEGORÍAS</p></a>
		</div>
	</body>
</html>