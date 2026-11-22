<?php

/*
    controlador: order.php

    descripción: ordena la tabla de alumnos según el criterio recibido por GET y carga la vista principal.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Crear objeto de la clase TablaAlumnos y cargar los datos iniciales
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// 2. Obtener el campo de ordenación y la dirección desde la URL
$orden = $_GET['campo'] ?? $_GET['orden'] ?? 'id';
$dir = $_GET['dir'] ?? 'asc';
$busqueda = $_GET['q'] ?? '';

// 3. Ordenar los alumnos según el criterio seleccionado
$tabla_alumnos->ordenarPor($orden, $dir);

// 4. Obtener la tabla de alumnos ordenada
$alumnos = $tabla_alumnos->talumnos;

// 5. Cargar asignaturas y cursos para la vista
$asignaturas = TablaAlumnos::getAsignaturas();
$cursos = TablaAlumnos::getCursos();

// 6. Cargar la vista principal
require_once __DIR__ . '/views/index.view.php';