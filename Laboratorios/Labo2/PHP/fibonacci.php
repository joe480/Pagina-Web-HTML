<?php include("Operaciones.php");
session_start();
$n=$_POST["txtN"];
$_SESSION["Operaciones"]=new Operaciones($n,"",0,0,0);
echo "El fibonacci de ".$n." es:<br>";
$_SESSION["Operaciones"]->fibonacci();
?>