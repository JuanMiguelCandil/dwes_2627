<?php

require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

$asignaturas = TablaAlumnos::getAsignaturas();
$cursos = TablaAlumnos::getCursos();

$orden = $_GET['orden'] ?? 'id';
$dir = $_GET['dir'] ?? 'asc';
$busqueda = $_GET['q'] ?? '';

if ($busqueda !== '') {
    $filtrados = $tabla_alumnos->buscar($busqueda);
    $tabla_alumnos->talumnos = $filtrados;
}

$tabla_alumnos->ordenarPor($orden, $dir);
$alumnos = $tabla_alumnos->talumnos;

include __DIR__ . '/views/index.view.php';