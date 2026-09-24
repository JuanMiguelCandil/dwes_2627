<?php
    /*
    Ejemplo 07: tipos de datos
    */
    $nombre = "Juan";
    $apellido = "Pérez López";
    $edad = 30;
    $poblacion = "Madrid";
    $casado = true;
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
    
    <?php
        // comillas dobles
        echo "<b>Nombre: </b>$nombre<br>";

        // comillas simples
        echo '<b>Nombre: </b>$nombre<br>';

        // solución uso comillas simples y concatenación
        echo '<b>Nombre: </b>' . $nombre . '<br>';
        
    ?>
</body>
</html>