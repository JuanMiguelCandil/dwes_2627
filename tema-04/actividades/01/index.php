<?php
require_once 'class/Alumno.php';

echo "<h1>Gestión de Alumnos (POO en PHP) - Teléfono tipo INT</h1>";

// 1. Objeto con atributos inicializados a null
$alumnoVacio = new Alumno();

echo "<h2>Objeto 1: Instanciado sin parámetros (Valores null)</h2>";
echo "<pre>";
var_dump($alumnoVacio);
echo "</pre>";

// Asignar valores usando SETTERS (el teléfono se pasa como entero numérico)
$alumnoVacio->setId(1);
$alumnoVacio->setNombre("María");
$alumnoVacio->setApellidos("García López");
$alumnoVacio->setPoblacion("Sevilla");
$alumnoVacio->setEmail("maria.garcia@email.com");
$alumnoVacio->setTelefono(600123456);
$alumnoVacio->setCurso("2º DAW");

echo "<h3>Objeto 1: Después de asignar valores con Setters y consultarlos con Getters</h3>";
echo "<ul>";
echo "<li><strong>ID:</strong> " . $alumnoVacio->getId() . "</li>";
echo "<li><strong>Nombre Completo:</strong> " . $alumnoVacio->getNombre() . " " . $alumnoVacio->getApellidos() . "</li>";
echo "<li><strong>Población:</strong> " . $alumnoVacio->getPoblacion() . "</li>";
echo "<li><strong>Email:</strong> " . $alumnoVacio->getEmail() . "</li>";
echo "<li><strong>Teléfono:</strong> " . $alumnoVacio->getTelefono() . "</li>";
echo "<li><strong>Curso:</strong> " . $alumnoVacio->getCurso() . "</li>";
echo "</ul>";

echo "<hr>";

// 2. Objeto pasando los valores directamente al constructor
$alumnoConDatos = new Alumno(
    2,
    "Carlos",
    "Pérez Gómez",
    "Jerez de la Frontera",
    "carlos.perez@email.com",
    677987654,
    "1º DAM"
);

echo "<h2>Objeto 2: Instanciado con parámetros en el constructor</h2>";
echo "<ul>";
echo "<li><strong>ID:</strong> " . $alumnoConDatos->getId() . "</li>";
echo "<li><strong>Nombre Completo:</strong> " . $alumnoConDatos->getNombre() . " " . $alumnoConDatos->getApellidos() . "</li>";
echo "<li><strong>Población:</strong> " . $alumnoConDatos->getPoblacion() . "</li>";
echo "<li><strong>Email:</strong> " . $alumnoConDatos->getEmail() . "</li>";
echo "<li><strong>Teléfono:</strong> " . $alumnoConDatos->getTelefono() . "</li>";
echo "<li><strong>Curso:</strong> " . $alumnoConDatos->getCurso() . "</li>";
echo "</ul>";

// Modificación mediante Setter
$alumnoConDatos->setCurso("2º DAM");
echo "<p><em>El curso del Objeto 2 ha sido actualizado mediante setCurso() a: " . $alumnoConDatos->getCurso() . "</em></p>";