<?php include("Operaciones.php");
session_start();
$cadena=$_POST["txtCadena"];
$_SESSION["Operaciones"]=new Operaciones(0,$cadena,0,0,0);
$_SESSION["Operaciones"]->piramide();
?>