<?php

// Cargamos las clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

$categoria = TablaLibros::getCategoria();
$etiquetas = TablaLibros::getEtiquetas();
$siguienteId = $tabla_libros->getSiguienteId();

include __DIR__ . '/views/new.view.php';