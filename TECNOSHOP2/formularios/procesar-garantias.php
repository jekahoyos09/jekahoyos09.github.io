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
            
            $fecha=$_POST["fecha"];
            $nombre=$_POST["nombre"];
            $apellido=$_POST["apellido"];
            $direccion=$_POST["direccion"];
            $telefono=$_POST["telefono"];
            $codigo=$_POST["codigo"];
            $categoria=$_POST["categoria"];
            $modelo=$_POST["modelo"];
            $cantidad=$_POST["cantidad"];
            $observaciones=$_POST["observaciones"];

            echo"<h3> DATOS RECIBIDOS:</h3";
            echo"<p>Fecha de factura:$fecha<p>";
            echo"<p>Nombres:$nombre<p>";
            echo"<p>Apellidos:$apellido<p>";
            echo"<p>Dirección:$direccion<p>";
            echo"<p>Teléfono:$telefono<p>";
            echo"<p>Código de producto:$codigo<p>";
            echo"<p>Categoría:$categoria<p>";
            echo"<p>Modelo:$modelo<p>";
            echo"<p>Cantidad:$cantidad<p>";
            echo"<p>Observaciones:$observaciones<p>";
            
        }
    ?>
</body>
</html>