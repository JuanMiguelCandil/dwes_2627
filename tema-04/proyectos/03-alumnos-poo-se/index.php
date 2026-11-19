<?php

/**
 * index.php
 *
 * Página principal del proyecto CRUD de alumnos. Muestra la tabla de alumnos, cada alumno es un objeto
 *
 * @package    CRUD Alumnos
 * @author     Juan Miguel Candil Pacheco
 * @version    1.0
 *
 * Tabla alumnos:
 *  - id
 *  - nombre
 *  - apellidos
 *  - email
 *  - fecha_nacimiento
 *  - curso
 *  - asignaturas (array)
 */

// Cargar clases
require_once __DIR__ . '/class/Alumno.php';
require_once __DIR__ . '/class/TablaAlumnos.php';

// Models - no lo necesitamos NO BASE DE DATOS

// 1. Crear un array de objetos de la clase Alumno
$tabla_alumnos = new TablaAlumnos();

// 2. Añadir alumnos al array
$tabla_alumnos->addAlumnos();

// 3. Obtener el array de alumnos
$alumnos = $tabla_alumnos->talumnos;

// 4. Obtener el array de asignaturas - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$asignaturas = TablaAlumnos::getAsignaturas();

// 5. Obtener el array de cursos - es  metodo estático, no necesitamos crear un objeto de la clase TablaAlumnos
$cursos = TablaAlumnos::getCursos();

// Views
include __DIR__ . '/views/index.view.php';