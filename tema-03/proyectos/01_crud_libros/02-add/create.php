<?php

/*
    create.php

    Permite crear un nuevo libro a partir de los datos enviados desde el formulario.

    @package CRUD Libros
    @author Juan Miguel Candil Pacheco
    @version 1.0

    Tabla libros:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - titulo (VARCHAR(255))
    - autor (VARCHAR(255))
    - editorial (VARCHAR(255))
    - generos
    - precio
*/

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Negociado
$libros = get_libros();

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$autor = htmlspecialchars($_POST['autor'] ?? '');
$editorial = htmlspecialchars($_POST['editorial'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? 0);

// Obtener id del nuevo libro creado
$nuevo_libro_id = obtener_id_nuevo_libro($libros);

// Crear array asociativo del nuevo libro
$nuevo_libro = [
    'id' => $nuevo_libro_id,
    'titulo' => $titulo,
    'autor' => $autor,
    'editorial' => $editorial,
    'generos' => explode(', ', $generos),
    'precio' => (float)$precio
];

$libros[] = $nuevo_libro;

// Views
include 'views/index.view.php';