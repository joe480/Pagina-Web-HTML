<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/maqueta.css">
    <title>Ejercicio 4</title>
</head>
<body>
<div id="contenedor">
        <div id="arriba">
        <h1>Joel Alejandro Ríos Vargas</h1>
        <h2>Desarrollo Web (SIS-256)</h2>
        </div>
        <div id="cuerpo3">
        <div id="centrar">
            <p><b>Ejercicio 4</b></p>
        </div>
        <?php
        $d=$_GET["txtND"];
        $dias=array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
        ?>
        <p>La seleccion es:</p>
        <?php
        if($d<1 || $d>7)
        echo "Introdució una opción incorrecta";
        else
        {
        echo '<select name="Dias" id="Dias">';
            
            
            for($i=1;$i<=7;$i++){
                if($i==$d)
                echo '<option value="',$i,'" selected="selected">',$dias[$i-1],'</option>';
                else
                echo '<option value="',$i,'">',$dias[$i-1],'</option>';
            }
        }
            ?>

        </select>

        </div>
        <div id="abajo">
        <ul class="menuright">
                        <li><a href="../FormularioTareaPHP.html">Volver al Menu</a></li>
                    </ul>

        </div>
</body>
</html>