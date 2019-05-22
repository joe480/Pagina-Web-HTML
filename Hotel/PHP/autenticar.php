<?php include("conexion.php");
session_start();
$correo=$_POST["txtCorreo"];
$password=$_POST["txtPassword"];
$sql = "Select Correo,Nombre,Nivel from usurios WHERE Correo='$correo' AND Contraseña='$password'";
$resultado=$con->query($sql); 
if ($fila = $resultado->fetch_assoc())
    {
    $_SESSION['correo']=$fila['Correo'];
    $_SESSION['nombre']=$fila['Nombre'];
    $_SESSION['nivel']=$fila['Nivel'];
    header("Location:hotel.php");
    }
    else
    {	
     echo "Error datos incorrectos de inicio de sesion";
    header("Location:.html");
    } 

?>