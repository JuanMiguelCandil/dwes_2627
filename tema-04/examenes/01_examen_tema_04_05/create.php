<?php

// Cargamos las clases
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

$tabla_libros = new TablaLibros();
$tabla_libros->addLibros();

// Procesamos el formulario de alta y añadimos el nuevo objeto Alumno[cite: 1, 2]
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $tabla_libros->getSiguienteId();
    $titulo = $_POST['titulo'] ?? null;
    $fecha_publicacion = !empty($_POST['f_nacimiento']) ? new DateTime($_POST['f_nacimiento']) : null;
    $autor = $_POST['autor'] ?? null;
    $categoria = (int)$_POST['categoria'] ?? null;
    $etiquetas = array_map('intval', $_POST['asignaturas'] ?? []);
    $numero_paginas = $_POST['numero_paginas'] ?? null;
    $stock = $_POST['stock'] ?? null;
    $precio = $_POST['precio'] ?? null;

    $nuevoLibro = new Libro(
        $id,
        $titulo,
        $fecha_publicacion,
        $autor,
        $categoria,
        $etiquetas,
        $numero_paginas,
        $stock,
        $precio
    );

    $tabla_libros->create($nuevoLibro);
}

// Preparamos variables para mostrar el listado actualizado en esta petición
$alumnos = $tabla_libros->tlibros;
$categoria = TablaLibros::getCategoria(); 
$etiquetas = TablaLibros::getEtiquetas(); 

$libros = $tabla_libros->tlibros;

include __DIR__ . '/views/index.view.php';