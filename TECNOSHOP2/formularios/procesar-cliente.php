<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-procesar.css">
    <title>Procesar Datos</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $correo=$_POST["correo"];
            
            echo"<h3> DATOS RECIBIDOS:</h3";
            echo"<p>Nombres:$nombre<p>";
            echo"<p>Apellidos:$apellido<p>";
            echo"<p>Dirección:$direccion<p>";
            echo"<p>Teléfono:$telefono<p>";
            echo"<p>Correo:$correo<p>";
            
        }
    ?>
</body>
</html>