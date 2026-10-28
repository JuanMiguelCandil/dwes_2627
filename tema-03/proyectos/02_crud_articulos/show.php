<?php
/*
    show.php
    Permite mostrar un artículo existente en la tabla

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
// Obtener el indice del libro a mostrar desde la URL
// show.php?indice=0 - muestra el  primer libro
$indice = htmlspecialchars($_GET['indice'] ?? null);

// Validar el índice recibido

// Cargar el array de libros
$articulos = generar_tabla_articulos();

// Obtenemos el libro a mostrar
$articulo = $articulos[$indice];

// Cargo la vista de edición con los detalles del libro a editar
require_once 'views/show.view.php';