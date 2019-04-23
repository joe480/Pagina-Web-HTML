<?php include("Pilas.php");
    session_start();
    $fila=$_GET["txtFila"];
    if(isset($_SESSION["estante"]))
        echo $_SESSION["estante"]->mostrar($fila);
    ?>
