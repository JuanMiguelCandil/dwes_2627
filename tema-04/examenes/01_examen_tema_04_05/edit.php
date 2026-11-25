<?php

// Cargamos las clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

// Buscamos el alumno por ID; si no existe, volvemos al inicio
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$libro = $tabla_libros->getLibroById($id);

if (!$libro) {
    header('Location: index.php');
    exit;
}

$categoria = TablaLibros::getCategoria();
$etiquetas = TablaLibros::getEtiquetas();

include __DIR__ . '/views/edit.view.php';