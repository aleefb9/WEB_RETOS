<?php
    require_once('../config/config.php');

    class modeloRetos{
        /**
         * Método constructor del modelo de retos
         */
        function __construct(){
            $this->conexion = $this->conectar();

            if(isset($_SESSION['id'])){
                $this->idProfesor=$_SESSION['id'];
            }
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
            $sql = "SELECT * FROM retos WHERE idProfesor=".$this->idProfesor.";";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

           /**
         * Método del modelo que lista los retos
         */
        public function listarGeneral(){
            $sql = "SELECT * FROM retos WHERE publicado=1;";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

        /**
         * Método del modelo que lista los retos filtranado por categorias
         */
        public function listarFiltrado($categoria){
            $sql = "SELECT * FROM retos 
                    WHERE idCategoria = $categoria 
                    AND idProfesor=".$this->idProfesor.";";

            $resultado = $this->conexion->query($sql);
            return $resultado;
        }

        /**
         * Método del modelo que da de alta un nuevo reto
         */
        public function alta($nombre, $dirigido, $descripcion, $iniInscripcion, $finInscripcion, $iniReto, $finReto, $fechaPublicacion, $publicado, $profesor, $categoria, $archivo){
            $sql = "INSERT INTO retos(nombre, dirigido, descripcion, fechaInicioInscripcion, fechaFinInscripcion, fechaInicioReto, fechaFinReto, fechaPublicacion, publicado, idProfesor, idCategoria, archivo) 
                    VALUES('".$nombre."','".$dirigido."','".$descripcion."','".$iniInscripcion."','".$finInscripcion."','".$iniReto."','".$finReto."','".$fechaPublicacion."', $publicado, '".$profesor."','".$categoria."', '".$archivo."');";

            // try{
            //     $resultado = $this->conexion->query($sql);
            //     return $resultado;
            // }
            // catch(Exception $error){
            //     $error=$this->conexion->errno;
            //     return 'error';
            // } 
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
        public function modificar($nuevoReto){
            $sql = 'UPDATE retos SET nombre="'.$nuevoReto['nombre'].'", dirigido="'.$nuevoReto['dirigido'].'", descripcion="'.$nuevoReto['descripcion'].'", fechaInicioInscripcion="'.$nuevoReto['iniInscripcion'].'", fechaFinInscripcion="'.$nuevoReto['finInscripcion'].'", fechaInicioReto="'.$nuevoReto['iniReto'].'", fechaFinReto="'.$nuevoReto['finReto'].'", fechaPublicacion="'.$nuevoReto['fechaPublicacion'].'", publicado='.$nuevoReto['publicado'].', idCategoria='.$nuevoReto['categoria'].'  WHERE id='.$nuevoReto['id'].';';
                    
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        /**
         * Método del modelo que consulta los datos de los retos en la vista detalles
         */
        public function detalles($id){                
            $sql = "SELECT *, retos.id AS idReto, retos.nombre AS nombreReto, categorias.nombre AS nombreCat, profesores.nombre AS nombreProf FROM retos 
                    INNER JOIN categorias ON retos.idCategoria = categorias.id
                    INNER JOIN profesores ON retos.idProfesor = profesores.id
                    WHERE retos.id=$id;";
                    
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }


        /**
         * Método del modelo que hace la consulta para listar los retos en el pdf
         */
        public function listarPdf(){                
            $sql = "SELECT *, retos.id AS idReto, retos.nombre AS nombreReto, categorias.nombre AS nombreCat
                    FROM retos 
                    INNER JOIN categorias ON retos.idCategoria = categorias.id
                    WHERE retos.idCategoria = categorias.id;";
                    
            $resultado = $this->conexion->query($sql);

            return $resultado;
        }

        /**
         * Método del modelo que lista los profesores de la base de datos
         */
        public function listarProfesor(){
            $sql = "SELECT * FROM profesores;";
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }
    }
?>