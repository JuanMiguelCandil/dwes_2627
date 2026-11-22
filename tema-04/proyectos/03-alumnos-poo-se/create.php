<?php

// Cargamos las clases[cite: 1, 2]
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

$tabla_alumnos = new TablaAlumnos(); //[cite: 2]
$tabla_alumnos->addAlumnos(); //[cite: 2]

// Procesamos el formulario de alta y añadimos el nuevo objeto Alumno[cite: 1, 2]
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)($_POST['id'] ?? $tabla_alumnos->getSiguienteId());
    $nombre = trim($_POST['nombre'] ?? '');
    $apellidos = trim($_POST['apellidos'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $f_nacimiento = !empty($_POST['f_nacimiento']) ? new DateTime($_POST['f_nacimiento']) : null;
    $curso = isset($_POST['curso']) && $_POST['curso'] !== '' ? (int)$_POST['curso'] : null;
    $asignaturasSeleccionadas = array_map('intval', $_POST['asignaturas'] ?? []);

    $nuevoAlumno = new Alumno(
        $id,
        $nombre,
        $apellidos,
        $email,
        $f_nacimiento,
        $curso,
        $asignaturasSeleccionadas
    );

    $tabla_alumnos->create($nuevoAlumno); //[cite: 2]
}

// Preparamos variables para mostrar el listado actualizado en esta petición
$alumnos = $tabla_alumnos->talumnos; //[cite: 2]
$asignaturas = TablaAlumnos::getAsignaturas(); //[cite: 2]
$cursos = TablaAlumnos::getCursos(); //[cite: 2]
$orden = 'id';
$dir = 'asc';
$busqueda = '';

include __DIR__ . '/views/index.view.php'; //[cite: 8]