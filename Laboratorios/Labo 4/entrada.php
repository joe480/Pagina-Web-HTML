<?php include ("conexion.php");
$sql = "SELECT ID, Asunto, Origen, Estado FROM recibidos";
$resultado = $com->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="ajax.js"></script>
	<title>Bandeja de Entrada</title>
</head>
<body>
	<div class="normal">
		<table>
			<th>Asunto</th>
			<th>Origen</th>
			<th>Estado</th>
			<?php
			while ($fila = $resultado->fetch_assoc()) {
			?>
			<tr>
			<td><?php echo $fila["Asunto"];?></td>
			<td><?php echo $fila["Origen"];?></td>
			<td><?php echo $fila["Estado"];?></td>
			<td><a href="javascript: llamar('ver_mensaje.php?txtId=<php?$fila[ID]?>')"> ver </a></td>
			</tr>
		<?php }
		$com->close()?>
		</table>
	</div>
</body>
</html>