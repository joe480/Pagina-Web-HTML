<?php include ("conexion.php");
$Id = $_GET["txtId"];
$sql = "SELECT Origen, Asunto, Mensaje FROM recibidos WHERE ID = Id";
$sql2 = "UPDATE recibidos SET Estado = 'L' WHERE ID = Id";
$resultado = $com->query($sql);
$com->query($sql2);
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
			<th>Origen</th>
			<th>Asunto</th>
			<th>Mensaje</th>
			<?php
			while ($fila = $resultado->fetch_assoc()) {
			?>
			<tr>
			<td><?php echo $fila["Origen"];?></td>
			<td><?php echo $fila["Asunto"];?></td>
			<td><?php echo $fila["Mensaje"];?></td>
			</tr>
		<?php }
		$com->close()?>
	</div>
</body>
</html>