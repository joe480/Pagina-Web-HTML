<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/maqueta.css">
    <title>Ejercicio 5</title>
</head>
<body>
<div id="contenedor">
        <div id="arriba">
        <h1>Joel Alejandro Ríos Vargas</h1>
        <h2>Desarrollo Web (SIS-256)</h2>
        </div>
        <div id="cuerpo2">
        <div id="centrar">
            <p><b>Ejercicio 5</b></p>
        </div>
        <?php
        $n=$_GET["txtN"]; ?>
        <p>El número <?php echo $n ?> es:</p> 
        <?php
        if($n%2==0)
        echo "<b>Par</b>";
        else
        echo "<b>Impar</b>";
        ?>

        </div>
        <div id="abajo">
        <ul class="menuright">
                        <li><a href="../FormularioTareaPHP.html">Volver al Menu</a></li>
                    </ul>

        </div>
</body>
</html>