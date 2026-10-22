<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de libros.

    Funciones incluidas:
    - get_libros(): Devuleve un array con todos los libros creados.
*/

// Función get_libros(): Devulve un array con todos los libros creados.
function get_libros() {
    // Array de libros (simulando una base de datos)
    $libros = [
    [
        'id' => 1,
        'titulo' => 'La sombra del viento',
        'autor' => 'Carlos Ruiz Zafón',
        'editorial' => 'Editorial Planeta',
        'generos' => ['Misterio', 'Novela'],
        'precio' => 17.99
    ],
    [
        'id' => 2,
        'titulo' => 'El principito',
        'autor' => 'Antoine de Saint-Exupéry',
        'editorial' => 'Reynal & Hitchcock',
        'generos' => ['Fábula', 'Literatura infantil'],
        'precio' => 9.99
    ],
    [
        'id' => 3,
        'titulo' => 'Crónica de una muerte anunciada',
        'autor' => 'Gabriel García Márquez',
        'editorial' => 'Editorial Oveja Negra',
        'generos' => ['Novela', 'Drama'],
        'precio' => 13.50
    ],
    [
        'id' => 4,
        'titulo' => 'Los juegos del hambre',
        'autor' => 'Suzanne Collins',
        'editorial' => 'Scholastic Press',
        'generos' => ['Distopía', 'Ciencia ficción'],
        'precio' => 16.99
    ],
    [
        'id' => 5,
        'titulo' => 'La metamorfosis',
        'autor' => 'Franz Kafka',
        'editorial' => 'Kurt Wolff Verlag',
        'generos' => ['Novela corta', 'Literatura fantástica'],
        'precio' => 11.99
    ]
];

    return $libros;
}

// Función para obtener el id del nuevo libro creado.
function obtener_id_nuevo_libro($libros) {
    if (empty($libros)) {
        return 1;
    }
    
    // Obtenemos la última clave del array de forma segura sin alterar punteros
    $ultima_clave = array_key_last($libros);
    $ultimo_libro = $libros[$ultima_clave];

    return $ultimo_libro['id'] + 1;
}