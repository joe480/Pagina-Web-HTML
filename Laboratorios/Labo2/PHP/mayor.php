<?php include("Operaciones.php");
session_start();
$a=$_POST["txtA"];
$b=$_POST["txtB"];
$c=$_POST["txtC"];
$_SESSION["Operaciones"]=new Operaciones(0,"",$a,$b,$c);
echo "El mayor es: ".$_SESSION["Operaciones"]->mayor();
?>