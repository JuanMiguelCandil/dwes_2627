<?php

/*
    delete.php
    Permite borrar un artículo existente en la tabla

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

// Cargar librerias
require_once 'libs/funciones_articulos.php';

// Models

// Negociado
$articulos = generar_tabla_articulos();

// Extraer el índice del formulario
$indice = $_GET['indice'] ?? null;

// Verificar que el índice es correcto
if ($indice !== null && isset($articulos[$indice])) {
    unset($articulos[$indice]);
    $articulos = array_values($articulos); // Reindexar
}

// Views
require_once 'views/index.view.php';