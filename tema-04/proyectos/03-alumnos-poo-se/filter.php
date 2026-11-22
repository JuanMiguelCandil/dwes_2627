<?php

/*
    controlador: filter.php

    descripción: filtra los alumnos según el término enviado por GET y carga la vista principal.
*/

// Cargamos las clases necesarias
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// 1. Crear objeto de la clase TablaAlumnos y cargar los datos iniciales
$tabla_alumnos = new TablaAlumnos();
$tabla_alumnos->addAlumnos();

// 2. Obtener el término de búsqueda desde la URL (admite 'q' o 'buscar')
$busqueda = trim($_GET['q'] ?? $_GET['buscar'] ?? '');
$orden = $_GET['orden'] ?? 'id';
$dir = $_GET['dir'] ?? 'asc';

// 3. Filtrar los alumnos si se ha introducido un texto
if ($busqueda !== '') {
    $tabla_alumnos->talumnos = $tabla_alumnos->buscar($busqueda);
}

// 4. Obtener la lista resultante y los arrays estáticos de cursos y asignaturas
$alumnos = $tabla_alumnos->talumnos;
$asignaturas = TablaAlumnos::getAsignaturas();
$cursos = TablaAlumnos::getCursos();

// 5. Cargar la vista principal
require_once __DIR__ . '/views/index.view.php';