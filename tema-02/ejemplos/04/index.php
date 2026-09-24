<?php
    $nombre = "Juan";
    $apellido = "Pérez López";
    $edad = 30;
    $poblacion = "Madrid";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar valor HTML</title>
</head>
<body>
    <h1>Ficha de Alumnos:</h1>
    <!-- Muestro los detalles del alumno -->
    <b>Nombre: </b><?php echo $nombre; ?><br>
    <b>Apellido: </b><?php echo $apellido; ?><br>
    <b>Edad: </b><?php echo $edad; ?><br>
    <b>Población: </b><?php echo $poblacion; ?><br>
</body>
</html>