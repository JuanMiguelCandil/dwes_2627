<?php

/*
    search.php
    Permite buscar en la lista de los artículos.

    @package CRUD Artículos
    @author Juan Miguel Candil Pacheco
    @version 1.0

    Tabla artículos:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - descripcion (VARCHAR(255))
    - modelo (VARCHAR(255))
    - categoria (VARCHAR(255))
    - unidades (INT)
    - precio (INT)
*/

// Cargar las librerías
require_once 'libs/funciones_articulos.php';

// Negociado
$articulos = generar_tabla_articulos();

// Recoge el texto que haya puesto el usuario
$query = strtolower(trim($_GET['q'] ?? ''));

// Busca un texto que cuadre con los artículos que hay
$articulos = array_filter($articulos, function($articulo) use ($query) {
    if ($query === '') return true;
    foreach ($articulo as $valor) {
        if (str_contains(strtolower((string)$valor), $query)) {
            return true;
        }
    }
    return false;
});

// Views
require_once 'views/index.view.php';