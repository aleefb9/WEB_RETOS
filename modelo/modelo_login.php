<?php
    require_once('config/config.php');

    class ModeloLogin{
        /**
         * Método constructor del modelo del inicio de sesion
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
         * Método del modelo que compara los datos introducidos en el inicio de sesion
         */
        public function login($correo, $contrasenia){
            $this->conectar();
            $sql= "SELECT * FROM profesores WHERE correo=? AND password=?;";
            $resultado = $this->conexion->prepare($sql);
            $resultado->bind_param("ss", $correo, $contrasenia);
            $resultado->execute();
            $obj=$resultado->get_result();
            
            if($obj->num_rows>0){
                $fila = $obj ->fetch_assoc();
                return $fila['id'];
            }
            else{
                return 0;
            }
            return $obj;

            $this->conexion->close();
        }
    }   
?>