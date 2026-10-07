<?php

/*
    actividad 2.2.2
    Descripción: estado de las variables
        - conversiones de datos en expresiones
        - funcion is_null()
        - funcion isset()
        - funcion empty()
    Alumno: Juan Miguel Candil Pacheco
    Fecha: 07/10/2026
*/

$null1 = null;
$null2 = null;
$null3 = null;

$noNull1 = 10;
$noNull2 = "Hola";
$noNull3 = false;

echo "<h3>Valores verdaderos:</h3>";
echo "is_null(null): " . (is_null($null1) ? "true" : "false") . "<br>";
echo "is_null(null): " . (is_null($null2) ? "true" : "false") . "<br>";
echo "is_null(null): " . (is_null($null3) ? "true" : "false") . "<br>";

echo "<h3>Valores falsos:</h3>";
echo "is_null(10): " . (is_null($noNull1) ? "true" : "false") . "<br>";
echo 'is_null("Hola"): ' . (is_null($noNull2) ? "true" : "false") . "<br>";
echo "is_null(false): " . (is_null($noNull3) ? "true" : "false") . "<br>";