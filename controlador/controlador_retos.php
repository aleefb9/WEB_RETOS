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
         * Método del controlador que lista los retos del profesor que haya iniciado sesion
         */
        public function listar() {
            $resultado=$this->modelo->listar();
            return $resultado;
        }

        /**
         * Método del controlador que lista todos los retos
         */
        public function listarGeneral() {
            $resultado=$this->modelo->listarGeneral();
            return $resultado;
        }

        /**
         * Método del controlador que lista los retos cuando se aplica el filtro
         */
        public function listarFiltrado($categoria) {
            $resultado=$this->modelo->listarFiltrado($categoria);
            return $resultado;
        }

         /**
         * Método del controlador que da de alta un nuevao reto
         */
        public function alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria, $archivo) {
            $reto=$this->modelo->alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria, $archivo);

            // if($reto=='error'){
            //     header('Location: error.php');
            //     exit;
            // }
            // else{
            //     return $reto;
            // }
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
        public function modificar($nuevoReto){
            $resultado=$this->modelo->modificar($nuevoReto);
        }

        /**
         * Método del controlador que nos muestras la vista detallada
         */
        public function detalles($id){  
            $resultado=$this->modelo->detalles($id);
            return $resultado;
        }
        
        /**
         * Método del controlador que 
         */
        public function listarPdf(){  
            $resultado=$this->modelo->listarPdf();
            return $resultado;
        }

        /**
         * Método del controlador que lista los profesores
         */
        public function listarProfesor() {
            $resultado=$this->modelo->listarProfesor();
            return $resultado;
        }
    }
?>
