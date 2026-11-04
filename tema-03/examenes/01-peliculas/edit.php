<?php

require_once 'libs/functions.php';

$indice = htmlspecialchars($_GET['indice'] ?? null);

$peliculas = get_peliculas();

$pelicula = $peliculas[$indice];

require_once 'views/edit.view.php';