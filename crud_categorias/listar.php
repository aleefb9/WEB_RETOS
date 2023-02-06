<?php
    require_once "../config.php";
    require_once "procesos.php";
?>

<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Consulta de categorías</title>
	</head>
	<body>
		<header>
			<h1>WEB RETOS</h1>
		</header>
		<nav>
			<a href="../index.php"><span>Retos</span></a>
			<a href="listar.php"><span>Categorías disponibles</span></a>
		</nav>
		<div id="contenedorTabla">
			<a href="formulario.php"><p id="aniadir">AÑADIR CATEGORÍAS</p></a>
			<table id="tablaCategoriaS">
				<thead>
					<th>ID</th>
					<th>NOMBRE CATEGORÍA</th>
					<th>BORRAR</th>
					<th>MODIFICAR</th>
				</thead>
				<tbody>
					<?php
						//Llama a la clase procesos
						$procesos = new Procesos();
						
						$sql = "SELECT id, nombre FROM categorias;";
						$resultado = $procesos->listar($sql);	

                        foreach($resultado as $mostrar){
                            echo '<tr>	
                                    <td>'.$mostrar['id'].'</td>
                                    <td>'.$mostrar['nombre'].'</td>
                                    <td><a href="confirmar_borrado.php?id='.$mostrar["id"].'&nombre='.$mostrar["nombre"].'"><i id="borrar" class="material-icons">delete</i></a></td>
                                    <td><a href="formulario_modificacion.php?id='.$mostrar["id"].'"><i class="material-icons">edit</i></a></td>
                                </tr>';
                        }
					?>
				</tbody>
			</table>
			<a href="formulario.php"><p id="aniadir">AÑADIR CATEGORÍAS</p></a>
		</div>
	</body>
</html>