<?php

// Cargamos las clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// Localizamos el índice del alumno y lo eliminamos
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$indice = $tabla_alumnos->getIndiceById($id);

if ($indice !== null) {
    $tabla_alumnos->delete($indice);
}

$alumnos = $tabla_alumnos->talumnos;
$asignaturas = TablaAlumnos::getAsignaturas();
$cursos = TablaAlumnos::getCursos();
$orden = 'id';
$dir = 'asc';
$busqueda = '';

include __DIR__ . '/views/index.view.php';