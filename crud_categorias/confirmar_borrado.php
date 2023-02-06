<?php
    if(isset($_GET["id"]))
    {
        echo'
            <div id="confirmarBorrado">
                <p>Realmente desea ELIMINAR la categoría '.$_GET["nombre"].'?</p>
                <a href="listar.php">Cancelar</a> <a href="procesos/borrar.php?id='.$_GET["id"].'">Eliminar</a>
            </div>
        ';
    }
?>