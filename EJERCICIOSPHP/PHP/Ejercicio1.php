<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/maqueta.css">
    <title>Ejercicio 1</title>
</head>
<body>
    <div id="contenedor">
        <div id="arriba">
        <h1>Joel Alejandro Ríos Vargas</h1>
        <h2>Desarrollo Web (SIS-256)</h2>
        </div>
        <div id="cuerpo2">
        <div id="centrar">
            <p><b>Ejercicio 1</b></p>
        </div>
        <p>La tabla es:</p>
        <table border="1" align="center" >
            <?php
            $n=$_GET["txtA"];
            for($i=0;$i<$n;$i++){
            ?>
            <tr><td width="150px" height="50px" ></td></tr>
            <?php
            }
            ?>
        </table>

        </div>
        <div id="abajo">
        <ul class="menuright">
                        <li><a href="../FormularioTareaPHP.html">Volver al Menu</a></li>
                    </ul>

        </div>
    </div>
</body>
</html>