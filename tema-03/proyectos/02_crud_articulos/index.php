<?php

/*
    index.php
    Página principal del proyecto CRUD de artículos.
    Muestra una lista de artículos y permite agregar, editar y eliminar artículos.

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

// Views
include 'views/index.view.php';