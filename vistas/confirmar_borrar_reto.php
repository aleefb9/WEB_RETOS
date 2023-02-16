<?php
    /**
     * Confirmación del borrado de retos
     */
    if(isset($_GET["id"]))
    {
        echo'
            <div id="confirmarBorrado">
                <p>Realmente desea ELIMINAR el reto '.$_GET["nombre"].'?</p>
                <a href="listar_reto.php?id='.$_GET["id"].'">Cancelar</a> <a href="borrar_reto.php?id='.$_GET["id"].'">Eliminar</a>
            </div>
        ';
    }
?>