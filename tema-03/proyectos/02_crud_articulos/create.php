<?php

/*
    create.php
    Permite crear un nuevo artículo a partir de los datos enviados desde el formulario.

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

// Extraer los datos del formulario
$descripcion = htmlspecialchars($_POST['descripcion'] ?? '');
$modelo = htmlspecialchars($_POST['modelo'] ?? '');
$categoria = htmlspecialchars($_POST['categoria'] ?? '');
$unidades = htmlspecialchars($_POST['unidades'] ?? '');
$precio = htmlspecialchars($_POST['precio'] ?? 0);

// Obtener id del nuevo artículo 
$nuevo_id = obtener_id_nuevo_articulo($articulos);

// Crear array asociativo del nuevo artículo
$nuevo_articulo = [
    'id' => $nuevo_id,
    'descripcion' => $descripcion,
    'modelo' => $modelo,
    'categoria' => $categoria,
    'unidades' => $unidades,
    'precio' => $precio
];

// Añadir al array
$articulos[] = $nuevo_articulo;

// Views
include 'views/index.view.php';