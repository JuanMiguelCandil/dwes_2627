<?php

// Cargar librerias
require_once 'libs/functions.php';

// Models

// Obtener el array de peliculas
$peliculas = get_peliculas();

// Extraer los datos del formulario
$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$anno = htmlspecialchars($_POST['anno'] ?? '');
$duracion = htmlspecialchars($_POST['duracion'] ?? '');
$recaudacion = htmlspecialchars($_POST['recaudacion'] ?? '');

// Obtener id de la nueva película
$nuevo_id_pelicula = obtener_id_nueva_pelicula($peliculas);

// Crear array asociativo de la nueva película
$nueva_pelicula = [
    'id' => $nuevo_id_pelicula,
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'anno' => $anno,
    'duracion' => $duracion,
    'recaudacion' => $recaudacion
];

// Agregar nueva película al array
$peliculas[] = $nueva_pelicula;

// Views
include 'views/index.view.php';