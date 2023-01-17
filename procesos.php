<?php
    class Procesos{
        public function listar($sql){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $resultado = mysqli_query($conexion, $sql);

            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }

        public function alta($nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "INSERT INTO categorias(nombre) VALUES('".$nombre."');";
            $resultado = mysqli_query($conexion, $sql);

            return $resultado;
        }

        public function borrar($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "DELETE FROM categorias WHERE id=".$id.";";
            $resultado = mysqli_query($conexion, $sql);

            return $resultado;
        }

        public function nuevoNombre($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $resultado = mysqli_query($conexion, $sql);

            return $resultado;
        }

        public function modificar($id, $nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = 'UPDATE categorias 
                    SET nombre = "'.$nombre.'"
                    WHERE id = '.$id.';';
            $resultado = mysqli_query($conexion, $sql);

            return $resultado;
        }
    }
?>