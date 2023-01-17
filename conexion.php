<?php
    class Conexion{
		private $servidor="2daw.esvirgua.com";
		private $usuario="user2daw_03";
		private $contrasenia="VDm}Bbuo]~V6";
		private $bbdd="user2daw_BD1-03";

		public function conexion(){
			$conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasenia, $this->bbdd);
			
            return $conexion;
		}
    }
?>