<?php
    require_once('../config/config.php');

    class modeloCategorias{
        /**
         * Método constructor del modelo de categorias
         */
        function __construct(){
            $this->conexion = $this->conectar();
        }

         /**
         * Método del modelo que conecta con la base de datos
         */
        public static function conectar(){
            $conexion = new mysqli(servidor, usuario, contrasenia, bbdd) or die('ERROR, no ha sido posible conectar.');
            $conexion->set_charset('utf8');

            return $conexion;
        }

         /**
         * Método del modelo que lista las categorías
         */
        public function listar(){
            $sql = "SELECT * FROM categorias;";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

          /**
         * Método del modelo que da de alta una nueva categoría
         */
        public function alta($nombre){
            $sql = 'INSERT INTO categorias(nombre) VALUES("'.$nombre.'");';
            $resultado = $this->conexion->query($sql);
        }

         /**
         * Método del modelo que borra las categorías
         */
        public function borrar($id){
            $sql = "DELETE FROM categorias WHERE id=".$id.";";
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        /**
         * Método del modelo que pasa el nombre para modificar
         */
        public function nuevoNombre($id){
            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        /**
         * Método del modelo que modifica la categoría seleccionada
         */
        public function modificar($id, $nombre){
            $sql = 'UPDATE categorias 
                    SET nombre = "'.$nombre.'"
                    WHERE id = '.$id.';';
                    
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }
    }
?>