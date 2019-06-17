<?php include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
	<link rel="stylesheet" type="text/css" href="stylo.css">
	<title>Correos</title>
</head>
<body class="cuerpo">
	<div class="contenedor">
		<h5 align="center">Universidad Mayor Real y Pontificia de San Francisco Xavier de Chuquisaca</h5>
	<h5 align="center">Facultad de Tecnología</h5>
	<h5 align="center">Carrera de Ing. De Ciencias de la Computacion</h5>
	<h5 align="center">Materia SIS256</h5>
	<h5 align="center">JAVIER ANDRES TAVERA SANDOVAL</h5>
	<div class="izquierda"><a href="javascript: llamar('entrada.php')">Bandeja Entrada</a>&nbsp&nbsp</div>
	<div class="izquierda"><a href="javascript: llamar('redactar.php')">Redactar</a>&nbsp&nbsp</div>
	<div class="izquierda"><a href="javascript: llamar('enviados.php')">Correos Enviados</a>&nbsp&nbsp</div>
	<div class="normal" id="contenido">
		Correos
	</div>
	</div>
</html>