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
            $factura=$_POST["factura"];
            $codigo=$_POST["codigo"];
            $categoria=$_POST["categoria"];
            $modelo=$_POST["modelo"];
            $cantidad=$_POST["cantidad"];
            

            echo"<h3> DATOS RECIBIDOS:</h3";
            echo"<p>Fecha:$fecha<p>";
            echo"<p>N° de factura:$factura<p>";
            echo"<p>Código de producto:$codigo<p>";
            echo"<p>Categoría:$categoria<p>";
            echo"<p>Modelo:$modelo<p>";
            echo"<p>Cantidad:$cantidad<p>";
            
        }
    ?>
</body>
</html>