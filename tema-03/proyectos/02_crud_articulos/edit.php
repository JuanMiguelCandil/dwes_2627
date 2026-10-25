<?php
/*
    edit.php
    Permite editar un artículo existente en la tabla

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

// Cargar librerias primero
require_once 'libs/funciones_articulos.php';

// Cargar el array de artículos antes de hacer comprobaciones
$articulos = generar_tabla_articulos();

// Obtener el índice del artículo a editar desde la URL
$indice = $_GET['indice'] ?? null;

// Validar el índice recibido (ahora $articulos ya está cargado)
if ($indice === null || !isset($articulos[$indice])) {
    header('Location: index.php');
    exit();
}

// Obtenemos el artículo específico en singular para la vista
$articulo = $articulos[$indice];

// Cargar las categorias para el select
$categorias = generar_tabla_categorias();

// Cargo la vista de edición con los detalles del artículo
require_once 'views/edit.view.php';