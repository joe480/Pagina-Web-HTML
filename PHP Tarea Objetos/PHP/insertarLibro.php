    <?php include("Pilas.php");
    session_start();
    $filai=$_GET["txtNroFila"];
    $libro=$_GET["txtLibro"];
   if(!isset($_SESSION["estante"]))
        $_SESSION["estante"]=new Estante();
        $_SESSION["estante"]->insertarLibro($filai,$libro);
    ?>