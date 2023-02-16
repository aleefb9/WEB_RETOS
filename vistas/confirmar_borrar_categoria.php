<?php
    /**
     * Confirmación del borrado de categorías
     */
    if(isset($_GET["id"]))
    {
        echo'
            <div id="confirmarBorrado">
                <p>Realmente desea ELIMINAR la categoría '.$_GET["nombre"].'?</p>
                <a href="listar_categoria.php">Cancelar</a> <a href="borrar_categoria.php?id='.$_GET["id"].'">Eliminar</a>
            </div>
        ';
    }
?>