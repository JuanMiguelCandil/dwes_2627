<?php

function get_peliculas() {
    // Array de peliculas
    $peliculas = [
        [
            'id' => 1,
            'titulo' => 'The last of us',
            'idioma' => 'Inglés',
            'director' => 'Neil Druckmann',
            'generos' => ['Acción', 'Aventura', 'Drama'],
            'anno' => 2023,
            'duracion' => 60,
            'recaudacion' => 28.3
        ],
        [
            'id' => 2,
            'titulo' => 'The Batman',
            'idioma' => 'Inglés',
            'director' => 'Matt Reeves',
            'generos' => ['Acción', 'Crimen', 'Drama'],
            'anno' => 2022,
            'duracion' => 120,
            'recaudacion' => 2187.5
        ],
        [
            'id' => 3,
            'titulo' => 'Avatar: The Way of Water',
            'idioma' => 'Inglés',
            'director' => 'James Cameron',
            'generos' => ['Acción', 'Aventura', 'Ciencia ficción'],
            'anno' => 2022,
            'duracion' => 180,
            'recaudacion' => 258.8
        ],
        [
            'id' => 4,
            'titulo' => 'Dune',
            'idioma' => 'Inglés',
            'director' => 'Denis Villeneuve',
            'generos' => ['Aventura', 'Drama', 'Ciencia ficción'],
            'anno' => 2021,
            'duracion' => 155,
            'recaudacion' => 174.2
        ],
        [
            'id' => 5,
            'titulo' => "Spider-Man: No Way Home",
            'idioma' => "Inglés",
            "director" => "Jon Watts",
            "generos" => ["Acción", "Aventura", "Ciencia ficción"],
            "anno" => 2021,
            "duracion" => 148,
            "recaudacion" => 34.0
        ],
        [
            'id' => 6,
            'titulo' => "The Matrix Resurrections",
            'idioma' => "Inglés",
            "director" => "Lana Wachowski",
            "generos" => ["Acción", "Ciencia ficción"],
            "anno" => 2021,
            "duracion" => 148,
            "recaudacion" => 347.7
        ]
    ];

    return $peliculas;
}

function obtener_id_nueva_pelicula($peliculas = []) {
    // Obtener la última película del array
    $ultima_pelicula = end($peliculas);

    // Obtener el id de la última película
    $ultimo_id = $ultima_pelicula['id'];

    // Devolver el id de la nueva película
    return $ultimo_id + 1;
}