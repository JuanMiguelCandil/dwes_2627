<?php

/*
    controlador: update.php
    
    descripción: actualiza los detalles de un alumno en la tabla de alumnos.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Libro.php';
require_once __DIR__ . '/class/TablaLibros.php';

// 1. Obtener id del alumno a editar desde GET o POST
$id = $_GET['id'] ?? null;

// 2. Extraemos los datos del formulario de edición enviados por POST
$titulo = $_POST['nombre'] ?? null;
$fecha_publicacion = !empty($_POST['f_nacimiento']) ? new DateTime($_POST['f_nacimiento']) : null;
$autor = $_POST['autor'] ?? null;
$categoria = isset($_POST['categoria']) && $_POST['categoria'] !== '' ? (int) $_POST['categoria'] : null;
$etiquetas = isset($_POST['etiquetas']) ? array_map('intval', $_POST['etiquetas']) : [];
$numero_paginas = $_POST['numero_paginas'] ?? null;
$stock = $_POST['stock'] ?? null;
$precio = $_POST['precio'] ?? null;

// 3. Crear un nuevo objeto de la clase Alumno con los datos actualizados
$libro_actualizado = new Libro(
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

// 4. Crear objeto de la clase TablaAlumnos
$tabla_libros = new TablaLibros();

// 5. Cargar los datos en la tabla de alumnos
$tabla_libros->addLibros();

// 6. Obtener índice del alumno a editar
$indice = $tabla_libros->getIndiceById($id);

// 7. Actualizar el alumno en la tabla de alumnos si existe
if ($indice !== null) {
    $tabla_libros->update($indice, $libro_actualizado);
}

// 8. Cargar la tabla de alumnos actualizada
$libros = $tabla_libros->tlibros;

// 9. Cargar la lista de asignaturas y cursos para la vista principal
$categoria = TablaLibros::getCategoria();
$etiquetas = TablaLibros::getEtiquetas();

// 10. Cargar la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';