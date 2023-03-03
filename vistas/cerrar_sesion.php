<?php
    /**
     * Cerramos la sesión y redireccionamos al index
     */
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../index.php');
?>