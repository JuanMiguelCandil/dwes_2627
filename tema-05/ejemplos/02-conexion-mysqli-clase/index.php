<?php

/**
 * Ejemplo: conexión mediante un objeto de la clase mysqli
 * Servidor: localhost
 * Base de datos: dwes_tienda
 * Usuario: user_dwes_tienda
 * Contraseña: 123456
 * Obtener todos los productos de la tabla productos
 */

declare(strict_types=1);

//Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'user_dwes_tienda', '123456', 'dwes_tienda');
// Juego de caracteres en español UTF-8
$conexion->set_charset('utf8mb4');
// Consulta a la base de datos
$resultado = $conexion->query('SELECT * FROM productos');

var_dump($resultado);