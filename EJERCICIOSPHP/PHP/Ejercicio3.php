<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/maqueta.css">
    <title>Ejercicio 3</title>
</head>
<body>
<div id="contenedor">
        <div id="arriba">
        <h1>Joel Alejandro Ríos Vargas</h1>
        <h2>Desarrollo Web (SIS-256)</h2>
        </div>
        <div id="cuerpo2">
        <div id="centrar">
            <p><b>Ejercicio 3</b></p>
        </div>
        <?php
        $b=$_GET["txtBase"];
        $h=$_GET["txtAlt"]; ?>
        <p>El Área de triángulo de base <b><?php echo $b ?></b> y altura <b><?php echo $h ?> es</b></p>
        <?php
            function area($b,$h){
                $a=($b*$h)/2;
                return $a;
            }
            echo area($b,$h);
        ?>

        </div>
        <div id="abajo">
        <ul class="menuright">
                        <li><a href="../FormularioTareaPHP.html">Volver al Menu</a></li>
                    </ul>

        </div>
</body>
</html>