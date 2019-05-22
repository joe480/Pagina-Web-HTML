<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/estilos.css">
    <title>Login</title>
</head>
<body>
    <div id="contenedor">
        <form action="autenticar.php" method="POST">
            <label for="txtCorreo">Correo</label>
            <input type="text" name="txtCorreo"><br>
            <label for="txtPassword">Contraseña</label>
            <input type="password" name="txtPassword"><br>
            <a href="../PAGES/registrar.html">Registrarse</a><br>
            <input type="submit" value="Ingresar">
            <input type="reset" value="Limpiar">
        </form>
    </div>
</body>
</html>