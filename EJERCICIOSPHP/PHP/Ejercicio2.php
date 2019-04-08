<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/maqueta.css">
    <title>Ejercicio 2</title>
</head>
<body>
<div id="contenedor">
        <div id="arriba">
        <h1>Joel Alejandro Ríos Vargas</h1>
        <h2>Desarrollo Web (SIS-256)</h2>
        </div>
        <div id="cuerpo2">
        <div id="centrar">
            <p><b>Ejercicio 2</b></p>
        </div>
        <p>La tabla es:</p>
        <?php
        $nr=$_GET["txtNR"];
        $nc=$_GET["txtNC"];
        $h=$_GET["txtH"];
        $w=$_GET["txtW"];
        ?>
        <table border="1" align="center">
            <?php
            for($i=0;$i<=$nr;$i++){
                if($i==0)
                echo "<tr><td width=",$w," height=",$h,"><b>X</b></td>";
                else
                echo "<tr><td width=",$w," height=",$h,"><b>",$i,"</b></td>";
                for($j=1;$j<=$nc;$j++){
                    if($i==0) 
                    echo "<td width=",$w," height=",$h,"><b>",$j,"</b></td>";
                    else 
                    echo "<td width=",$w," height=",$h,">",$i*$j,"</td>";
                }
                echo "</tr>";
                }
            ?> 
        </table>

        </div>
        <div id="abajo">
        <ul class="menuright">
                        <li><a href="../FormularioTareaPHP.html">Volver al Menu</a></li>
                    </ul>

        </div>
</body>
</html>