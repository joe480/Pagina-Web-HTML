<?php include ("conexion.php");
$sql = "SELECT ID, Asunto, Destino, Mensaje FROM enviados";
$resultado = $com->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
	<title>Correos enviados</title>
</head>
<body>
	<div class="normal">
		<table>
			<th>Asunto</th>
			<th>Destino</th>
			<th>Mensaje</th>
			<?php
			while ($fila = $resultado->fetch_assoc()) {
			?>
			<tr>
			<td><?php echo $fila["Asunto"];?></td>
			<td><?php echo $fila["Destino"];?></td>
			<td><?php echo $fila["Mensaje"];?></td>
			</tr>
		<?php }
		$com->close()?>
		</table>
	</div>
</body>
</html>