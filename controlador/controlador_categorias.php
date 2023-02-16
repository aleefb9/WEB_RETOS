<?php
    require_once "../modelo/modelo_categorias.php";

    class controladorCategorias{
        /**
         * Método constructor del controlador de categorias
         */
        public function __construct() {
            $this->modelo = new modeloCategorias();
        }

        /**
         * Método del controlador que lista las categorías
         */
        public function listar() {
            $resultado=$this->modelo->listar();
            return $resultado;
        }

         /**
         * Método del controlador que da de alta una nueva categoría
         */
        public function alta() {
            $nombre = $_POST["nombre"];
            $this->modelo->alta($nombre);
        }

         /**
         * Método del controlador que borra las categorías
         */
        public function borrar($id){
            $resultado=$this->modelo->borrar($id);
            if($resultado > 0){
                header('location: listar_categoria.php');
            }
            else{
                header('Error al eliminar la categoría.');
            } 
        }

        /**
         * Método del controlador que pasa el nombre para modificar
         */
        public function nuevoNombre($id){
            $resultado=$this->modelo->nuevoNombre($id);
            return $resultado;
        }

        /**
         * Método del controlador que modifica la categoría seleccionada
         */
        public function modificar($id, $nombre){
            $resultado=$this->modelo->modificar($id, $nombre);
            return $resultado;
        }
    }
?>
