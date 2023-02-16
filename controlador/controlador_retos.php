<?php
    require_once "../modelo/modelo_retos.php";

    class controladorRetos{
        /**
         * Método constructor del controlador de retos
         */
        public function __construct() {
            $this->modelo = new modeloRetos();
        }

        /**
         * Método del controlador que lista los retos
         */
        public function listar() {
            $resultado=$this->modelo->listar();
            return $resultado;
        }

         /**
         * Método del controlador que da de alta un nuevao reto
         */
        public function alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria) {
            $this->modelo->alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria);
        }

         /**
         * Método del controlador que borra los retos
         */
        public function borrar($id){
            $resultado=$this->modelo->borrar($id);
            if($resultado > 0){
                header('location: listar_reto.php');
            }
            else{
                header('Error al eliminar el reto.');
            } 
        }

        /**
         * Método del controlador que pasa el nombre para modificar
         */
        public function nuevoReto($id){
            $resultado=$this->modelo->nuevoReto($id);
            return $resultado;
        }

        /**
         * Método del controlador que modifica el retos seleccionado
         */
        public function modificar($id, $nombre){
            $resultado=$this->modelo->modificar($id, $nombre);
            return $resultado;
        }

        public function detalles($id){  
            $resultado=$this->modelo->detalles($id);
            return $resultado;
        }

        public function listarProfesor() {
            $resultado=$this->modelo->listarProfesor();
            return $resultado;
        }
    }
?>
