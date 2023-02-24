
<?php
    class Conexion{
        public static function conectar(){
            $conexion = new mysqli(servidor, usuario, contrasenia, bbdd) or die('ERROR, no ha sido posible conectar.');
            $conexion->set_charset("utf8mb4");
            return $conexion;
        }
    }
?>