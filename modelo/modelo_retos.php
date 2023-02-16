<?php
    require_once('../config/config.php');

    class modeloRetos{
        /**
         * Método constructor del modelo de retos
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
         * Método del modelo que lista los retos
         */
        public function listar(){
            $sql = "SELECT * FROM retos;";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

          /**
         * Método del modelo que da de alta un nuevo reto
         */
        public function alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria){
            $sql = "INSERT INTO retos(nombre, dirigido, descripcion, fechaInicioInscripcion, fechaFinInscripcion, fechaInicioReto, fechaFinReto, fechaPublicacion, publicado, idProfesor, idCategoria) 
                    VALUES('".$nombre."','".$dirigido."','".$descripcion."','".$iniInscripcion."','".$finInscripcion."','".$iniReto."','".$finReto."','".$fechaPublicacion."', $publicado, '".$profesor."','".$categoria."');";

            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

         /**
         * Método del modelo que borra los retos
         */
        public function borrar($id){
            $sql = "DELETE FROM retos WHERE id=".$id.";";
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        /**
         * Método del modelo que pasa el nombre para modificar
         */
        public function nuevoReto($id){
            $sql = "SELECT * from retos WHERE id=$id;";
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        /**
         * Método del modelo que modifica el reto seleccionada
         */
        public function modificar($id, $nombre){
            $sql = 'UPDATE categorias 
                    SET nombre = "'.$nombre.'"
                    WHERE id = '.$id.';';
                    
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        public function detalles($id){                
            $sql = "SELECT * FROM retos WHERE id=$id;";
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        public function listarProfesor(){
            $sql = "SELECT * FROM profesores;";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }
    }
?>