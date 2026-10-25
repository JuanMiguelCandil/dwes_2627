<?php

/*
    order.php
    Permite ordenar la lista de los artículos.

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

// Cargar librerías
require_once 'libs/funciones_articulos.php';

// Negociado
$articulos = generar_tabla_articulos();

// Ver que campo ha seleccionado el usuario
$campo = $_GET['campo'] ?? 'id';

// Ordenar por el campo que haya seleccionado el usuario
usort($articulos, function($a, $b) use ($campo) {
    if ($campo == 'id' || $campo == 'Unidades' || $campo == 'Precio') {
        return $a[$campo] <=> $b[$campo];
    }
    return strcasecmp($a[$campo], $b[$campo]);
});

// Views
require_once 'views/index.view.php';