<?php
    class Procesos{
        //Método listar
        public function listar($sql){
            $conexion = new Config();
            $conexion = $conexion->conexion();

            $resultado = $conexion->query($sql);

            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }

        //Método alta
        public function alta($nombre){
            $conexion = new Config();
            $conexion = $conexion->conexion();

            $sql = "INSERT INTO categorias(nombre) VALUES('".$nombre."');";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        //Método borrar
        public function borrar($id){
            $conexion = new Config();
            $conexion = $conexion->conexion();

            $sql = "DELETE FROM categorias WHERE id=".$id.";";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        //Método para coger el nombre que  vayamos a modificar
        public function nuevoNombre($id){
            $conexion = new Config();
            $conexion = $conexion->conexion();

            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        //Método modificar
        public function modificar($id, $nombre){
            $conexion = new Config();
            $conexion = $conexion->conexion();

            $sql = 'UPDATE categorias 
                    SET nombre = "'.$nombre.'"
                    WHERE id = '.$id.';';
                    
            $resultado = $conexion->query($sql);

            return $resultado;
        }
    }
?>