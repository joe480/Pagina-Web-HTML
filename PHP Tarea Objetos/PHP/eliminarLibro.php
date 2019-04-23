
    <?php include("Pilas.php");
    session_start();
    $fila=$_GET["txtNroFila"];
    if(isset($_SESSION["estante"]))
        echo $_SESSION["estante"]->eliminarLibro($fila);
    ?>
