<?php
	$com = new mysqli("localhost", "root", "", "bd_correos");
	if ($com->connect_error) {
		die("conexion fallada".$com->connect_error);
	}
?>