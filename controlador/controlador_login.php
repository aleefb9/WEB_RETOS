<?php
    require_once('modelo/modelo_login.php');

    class ControladorLogin{
         /**
         * Método constructor del controlador del inicio de sesion
         */
        function __construct(){       
            $this->modelo=new ModeloLogin();
        }

         /**
         * Método del controlador que envia los datos introducidos al modelo en el inicio de sesion
         */
        public function login($correo, $contrasenia){
            $id=$this->modelo->login($correo, $contrasenia);

            if($id>0){
                session_start();
                $_SESSION['id']=$id;
                header('Location: index.php');
            }
        }
    }
?>