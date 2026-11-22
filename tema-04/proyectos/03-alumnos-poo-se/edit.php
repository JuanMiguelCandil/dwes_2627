<?php

// Cargamos las clases[cite: 1, 2]
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

$tabla_alumnos = new TablaAlumnos(); //[cite: 2]
$tabla_alumnos->addAlumnos(); //[cite: 2]

// Buscamos el alumno por ID; si no existe, volvemos al inicio
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$alumno = $tabla_alumnos->getAlumnoById($id); //[cite: 2]

if (!$alumno) {
    header('Location: index.php');
    exit;
}

$asignaturas = TablaAlumnos::getAsignaturas(); //[cite: 2]
$cursos = TablaAlumnos::getCursos(); //[cite: 2]

include __DIR__ . '/views/edit.view.php';