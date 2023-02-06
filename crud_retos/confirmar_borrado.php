<?php
    if(isset($_GET["id"]))
    {
        echo'
            <div id="confirmarBorrado">
                <p>Realmente desea ELIMINAR el reto '.$_GET["nombre"].'?</p>
                <a href="procesos/detalles.php?id='.$_GET["id"].'">Cancelar</a> <a href="procesos/borrar.php?id='.$_GET["id"].'">Eliminar</a>
            </div>
        ';
    }
?>