<?php include ("conexion.php");
$Destino = $_POST['TxtDestino'];
$Asunto = $_POST['TxtAsunto'];
$Mensaje = $_POST['TxtMensaje'];
$sql = "INSERT INTO enviados (Mensaje, Asunto, Destino) VALUES ('$Mensaje', '$Asunto', '$Destino')";
$resultado = $com->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
	<title>Envios</title>
</head>
<body>
	<div class="normal">
		<?php 
			if ($com->connect_error) {
				echo "no se pudo insertar".$con->connect_error;
			}
			else
				echo "Enviado con exito";
		 ?>
	</div>
	<meta http-equiv = "refresh" content="2; URL=menu.php">
</body>
</html>