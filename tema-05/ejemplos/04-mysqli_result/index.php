<?php

/**
 * Ejemplo: uso de la clase mysqli_result
 * Descripción: Permite mostrar el resultado de una consulta de la base de datos
 */

declare(strict_types=1);

// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'user_dwes_tienda', '123456', 'dwes_tienda');
// No hace falta comprobar si hay errores en la conexión, ya que se ha 
// configurado por defecto que mysqli lance excepciones en caso de error

// Juego de caracteres en español UTF-8
$conexion->set_charset('utf8mb4');
// Consulta a la base de datos
$resultado = $conexion->query('SELECT * FROM productos');
// Mostrar el resultado de la consulta
echo 'Número de filas: ' . $resultado->num_rows . '<br>';
// Obtener array de resultados
$array_productos = $resultado->fetch_all(MYSQLI_ASSOC);
//Mostrar el array de resultados
echo '<pre>';
print_r($array_productos);

var_dump($resultado);