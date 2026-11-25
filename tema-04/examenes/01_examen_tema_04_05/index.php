<?php

/*
    Fichero: index.php
    @autor: Juan Miguel Candil Pacheco
    @examen: examen 01 tema 04
*/

require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

$categoria = TablaLibros::getCategoria();
$etiquetas = TablaLibros::getEtiquetas();

$libros = $tabla_libros->tlibros;

include __DIR__ . '/views/index.view.php';