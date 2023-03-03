<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        require_once('../index.php');
    }

	include 'header.php';
?>
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

				if($resultado->num_rows>0){ 
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
			echo '
				<h1>No hay categorías</h1>
			';
		}
	?>
	<a href="alta_categoria.php"><p id="aniadir">AÑADIR CATEGORÍAS</p></a>
</div>
<?php include 'footer.php';?>