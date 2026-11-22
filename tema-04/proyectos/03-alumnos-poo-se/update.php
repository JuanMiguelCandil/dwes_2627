<?php

/*
    controlador: update.php
    
    descripción: actualiza los detalles de un alumno en la tabla de alumnos.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Obtener id del alumno a editar desde GET o POST
$id = $_GET['id'] ?? null;

// 2. Extraemos los datos del formulario de edición enviados por POST
$nombre = $_POST['nombre'] ?? null;
$apellidos = $_POST['apellidos'] ?? null;
$email = $_POST['email'] ?? null;
$f_nacimiento = !empty($_POST['f_nacimiento']) ? new DateTime($_POST['f_nacimiento']) : null;
$curso = isset($_POST['curso']) && $_POST['curso'] !== '' ? (int) $_POST['curso'] : null;
$asignaturas_seleccionadas = isset($_POST['asignaturas']) ? array_map('intval', $_POST['asignaturas']) : [];

// 3. Crear un nuevo objeto de la clase Alumno con los datos actualizados
$alumno_actualizado = new Alumno(
    $id,
    $nombre,
    $apellidos,
    $email,
    $f_nacimiento,
    $curso,
    $asignaturas_seleccionadas
);

// 4. Crear objeto de la clase TablaAlumnos
$tabla_alumnos = new TablaAlumnos();

// 5. Cargar los datos en la tabla de alumnos
$tabla_alumnos->addAlumnos();

// 6. Obtener índice del alumno a editar
$indice = $tabla_alumnos->getIndiceById($id);

// 7. Actualizar el alumno en la tabla de alumnos si existe
if ($indice !== null) {
    $tabla_alumnos->update($indice, $alumno_actualizado);
}

// 8. Cargar la tabla de alumnos actualizada
$alumnos = $tabla_alumnos->talumnos;

// 9. Cargar la lista de asignaturas y cursos para la vista principal
$asignaturas = TablaAlumnos::getAsignaturas();
$cursos = TablaAlumnos::getCursos();

// 10. Cargar la vista principal de la aplicación
require_once __DIR__ . '/views/index.view.php';