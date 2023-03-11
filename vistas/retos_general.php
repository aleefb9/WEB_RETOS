<?php
    session_start();
    if(!isset($_SESSION['id'])) {
        require_once('../index.php');
    }

	include 'header.php';
?>
<div id="contenedorTablaRetos">
	<h1>RETOS PUBLICADOS</h1>
	<table id="tablaCategoriaS">
		<thead>
			<th>NOMBRE RETO</th>
			<th>DESCRIPCIÓN</th>
            <th>DIRIGIDO</th>
			<th>INICIO</th>
            <th>FIN</th>
            <th>VER DETALLES</th>
		</thead>
		<tbody>
            <?php
                require_once('../controlador/controlador_retos.php');
                $controlador=new controladorRetos();
                $resultado=$controlador->listarGeneral();

                if($resultado->num_rows>0){ 
                    foreach($resultado as $mostrar){
                        echo '<tr>	
                                <td>'.$mostrar['nombre'].'</td>
                                <td>'.$mostrar['descripcion'].'</td>
                                <td>'.$mostrar['dirigido'].'</td>
                                <td>'.$mostrar['fechaInicioReto'].'</td>
                                <td>'.$mostrar['fechaFinReto'].'</td>
                                <td><a href="detalles.php?id='.$mostrar['id'].'"><i class="material-icons">visibility</i></a></td>
                             </tr>';
                    }
            ?>
        </tbody>
    </table>
    <?php
        }else{
            echo '
                <h1>No hay retos disponibles</h1>
            ';
        }
    ?>
</div>
<?php include 'footer.php';?>
