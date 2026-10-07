<?php

/*
    Proyecto: proyecto 2.2 - cálculo lanzamiento proyectiles
    Descripción: Dada la velocidad incial y el ángulo de lanzamiento, calcular:
    - La altura máxima
    - El tiempo de vuelo
    - La distancia horizontal del proyectil
    - Velocidad inicial horizontal
    - Velocidad inicial vertical
    Alumno: Juan Miguel Candil Pacheco
    Fecha: 06/10/2026
*/

// Modelo

// Negociado
// Recoger los valores del formulario
$velocidad_inicial = (float) $_POST['velocidad_inicial'];
$angulo_lanzamiento = (float) $_POST['angulo_lanzamiento'];

$G = 9.81;

// Realizar los cálculos
$angulo_rad = deg2rad($angulo_lanzamiento);

$velocidad_horizontal =
    $velocidad_inicial * cos($angulo_rad);

$velocidad_vertical =
    $velocidad_inicial * sin($angulo_rad);

$tiempo_vuelo =
    (2 * $velocidad_vertical) / $G;

$altura_maxima =
    ($velocidad_vertical ** 2) / (2 * $G);

$distancia_horizontal =
    $velocidad_horizontal * $tiempo_vuelo;

// Formatear SOLO para mostrar
$angulo_rad = number_format($angulo_rad, 5, ",", ".");
$velocidad_horizontal = number_format($velocidad_horizontal, 2, ",", ".");
$velocidad_vertical = number_format($velocidad_vertical, 2, ",", ".");
$tiempo_vuelo = number_format($tiempo_vuelo, 2, ",", ".");
$altura_maxima = number_format($altura_maxima, 2, ",", ".");
$distancia_horizontal = number_format($distancia_horizontal, 2, ",", ".");

$operacion = 'Cálculo de Lanzamiento de Proyectiles';

// Vista
include 'views/resultado.view.php';