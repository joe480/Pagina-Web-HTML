<?php include ("conexion.php");
$sql = "SELECT ID, Asunto, Origen, Estado FROM recibidos";
$resultado = $com->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
	<title>Redactar</title>
</head>
<body>
	<div class="normal">
		<form action="enviar.php" method="POST">
			<label for="TxtDestino">Destino: </label>
			<input type="text" name="TxtDestino">
			<label for="TxtAsunto">Asunto: </label>
			<input type="text" name="TxtAsunto">
			<label for="TxtMensaje">Mensaje: </label>
			<input type="text" name="TxtMensaje">
			<input type="submit" name="Enviar">
		</form>
	</div>
</body>
</html>