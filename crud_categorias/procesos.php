<?php
    class Procesos{ 
        function __construct(){
            $this->conexion = $this->conectar();
        }

        public static function conectar(){
            $conexion = new mysqli(servidor, usuario, contrasenia, bbdd) or die('ERROR, no ha sido posible conectar.');
            $conexion->set_charset('utf8');

            return $conexion;
        }

        //Método listar
        public function listar($sql){
            $resultado = $this->conexion->query($sql);

            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }

        //Método alta
        public function alta($nombre){

            $sql = 'INSERT INTO categorias(nombre) VALUES("'.$nombre.'");';
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        //Método borrar
        public function borrar($id){

            $sql = 'DELETE FROM categorias WHERE id='.$id.';';
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        //Método para coger el nombre que  vayamos a modificar
        public function nuevoNombre($id){

            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        //Método modificar
        public function modificar($id, $nombre){

            $sql = 'UPDATE categorias 
                    SET nombre = "'.$nombre.'"
                    WHERE id = '.$id.';';
                    
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }
    }
?>