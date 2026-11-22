<?php

// Cargamos las clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

$asignaturas = TablaAlumnos::getAsignaturas();
$cursos = TablaAlumnos::getCursos();
$siguienteId = $tabla_alumnos->getSiguienteId();

include __DIR__ . '/views/new.view.php';