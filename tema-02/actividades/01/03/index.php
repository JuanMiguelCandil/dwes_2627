<?php

/*
    actividad 2.1.1
    Descripción: uso variables
        - un título
        - un párrafo
        - un enlace
    Alumno: Juan Miguel Candil Pacheco
    Fecha: 30/09/2026
*/

// Modelo 
// include 'model.index.php';

// Negociado de la aplicación - php

$titulo = "Mi primera aplicación en PHP";
$parrafo = "Esta es mi primera aplicación en PHP.
            Esta es mi primera aplicación en PHP.
            Esta es mi primera aplicación en PHP.
            Esta es mi primera aplicación en PHP.
            Esta es mi primera aplicación en PHP.";
$enlace = "https://www.elpais.com";
$imagen = "elpais.png";
$cadena2 = "Esta es mi primera cadena";
$cadena3 = "Esta es mi segunda cadena";
$cadena1 = $cadena2 . " " . $cadena3;

// Vista de la aplicación - html
include 'view.index.php';