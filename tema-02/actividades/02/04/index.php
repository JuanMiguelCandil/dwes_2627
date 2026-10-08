<?php

/*
    actividad 2.2.4
    Descripción: estado de las variables
        - conversiones de datos en expresiones
        - funcion is_null()
        - funcion isset()
        - funcion empty()
    Alumno: Juan Miguel Candil Pacheco
    Fecha: 07/10/2026
*/

$empty1 = "";
$empty2 = 0;
$empty3 = null;

$notEmpty1 = "Hola";
$notEmpty2 = 10;
$notEmpty3 = true;

echo "<h3>Valores verdaderos:</h3>";
echo 'empty(""): ' . (empty($empty1) ? "true" : "false") . "<br>";
echo "empty(0): " . (empty($empty2) ? "true" : "false") . "<br>";
echo "empty(null): " . (empty($empty3) ? "true" : "false") . "<br>";

echo "<h3>Valores falsos:</h3>";
echo 'empty("Hola"): ' . (empty($notEmpty1) ? "true" : "false") . "<br>";
echo "empty(10): " . (empty($notEmpty2) ? "true" : "false") . "<br>";
echo "empty(true): " . (empty($notEmpty3) ? "true" : "false") . "<br>";