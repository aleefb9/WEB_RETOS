<?php 
	session_start();
	if(!isset($_SESSION['id'])) {
		require_once('vistas/login.php');
	}
	else{
?>
<html>
	<head>
		<meta charset=utf-8 />
        <meta content=autor value="Alejandro Fernández <alejandrofernandezbanda.guadalupe@alumnado.fundacionloyola.net>" />
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>INICIO</title>
	</head>
	<body>
        <header>
			<a href="vistas/cerrar_sesion.php"><span id="cerrarSesion">Cerrar sesión</span></a>
			<h1>WEB RETOS</h1>
		</header>
		<nav>
			<a href="index.php"><span>INICIO</span></a>
			<a href="vistas/listar_reto.php"><span>Retos</span></a>
			<a href="vistas/listar_categoria.php"><span>Categorías disponibles</span></a>
			<a href="vistas/fpdf.php"><span>PDF</span></a>
		</nav>
		<div id="introduccion">
			<p>Sea <span id="intro">BIENVENIDO</span> a la web de gestión de retos de la Ecuela Virgen de Guadalupe</p>
		</div>
    </body>
</html>
<?php 
}
?>
