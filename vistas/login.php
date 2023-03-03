<?php
    if(isset($_POST['correo'])){
        $correo=$_POST['correo'];
        $contrasenia=$_POST['contrasenia'];

        require_once('controlador/controlador_login.php');
        $controlador=new ControladorLogin();
		$controlador->login($correo, $contrasenia);	
    }
?>

<html>
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title>Inicio de sesión</title>
    </head>
    <body>
        <div id="formularioLogin">
            <h1>Iniciar sesión</h1>
            <p>Para acceder a la WEB RETOS complete el siguiente formulario:</p>
            <form action="index.php" method="POST">
                <br/>
                <label for="correo">Correo electrónico:</label>
                <input type="text" id="correo" name="correo">
                <br/><br/>
                <label for="contrasenia">Contraseña:</label>
                <input type="password" id="contrasenia" name="contrasenia">
                <br/><br/>
                <input id="botonInicio" type="submit" value="INICIAR SESION">
            </form>
        </div>
    </body>
</html>