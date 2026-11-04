<?php

require_once 'libs/functions.php';

$indice = htmlspecialchars($_GET['indice'] ?? null);

$peliculas = get_peliculas();

$titulo = htmlspecialchars($_POST['titulo'] ?? '');
$idioma = htmlspecialchars($_POST['idioma'] ?? '');
$director = htmlspecialchars($_POST['director'] ?? '');
$generos = htmlspecialchars($_POST['generos'] ?? '');
$anno = htmlspecialchars($_POST['anno'] ?? '');
$duracion = htmlspecialchars($_POST['duracion'] ?? '');
$recaudacion = htmlspecialchars($_POST['recaudacion'] ?? '');

$editar_pelicula = [
    'id' => $peliculas[$indice]['id'],
    'titulo' => $titulo,
    'idioma' => $idioma,
    'director' => $director,
    'generos' => explode(', ', $generos),
    'anno' => $anno,
    'duracion' => $duracion,
    'recaudacion' => $recaudacion
];

$peliculas[$indice] = $editar_pelicula;

require_once 'views/index.view.php';