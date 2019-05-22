<?php
include("conexion.php");
$nombre=$_POST["txtNombre"];
$apellido=$_POST["txtApellido"];
$correo=$_POST["txtCorreo"];
$password=md5($_POST["txtContraseña"]);
$sexo=$_POST["Sexo"];
$sql="INSERT INTO usurios (Nombre,Apellido,Correo,Contraseña,Sexo,Nivel) values ('$nombre','$apellido','$correo','$password','$sexo',0)";
$con->query($sql);
if ($con->connect_error)
	echo "no se pudo insertar".$con->connect_error;
?>
 <meta http-equiv="refresh" content="2;URL=Login.php"> 
