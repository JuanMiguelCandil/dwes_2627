<?php

/**
 * Ejemplo: conexión mysqli estilo procedural
 * Base de datos: dwes_tienda
 * Obtener todos los productos de la tabla productos
 */

$conexion = mysqli_connect('localhost', 'root', '', 'dwes_tienda');
$resultado = mysqli_query($conexion, 'SELECT * FROM productos');

var_dump($resultado);