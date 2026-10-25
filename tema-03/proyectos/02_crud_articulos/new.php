<?php

/*
    new.php
    Permite crear nuevo artículo.

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
$categorias = generar_tabla_categorias();

// Views
include 'views/new.view.php';