<?php

/*
    actividad 2.2.3
    Descripción: estado de las variables
        - conversiones de datos en expresiones
        - funcion is_null()
        - funcion isset()
        - funcion empty()
    Alumno: Juan Miguel Candil Pacheco
    Fecha: 07/10/2026
*/

echo "<h3>Valores verdaderos:</h3>";
$valor1 = "Hola";
$valor2 = 25;
$valor3 = false;

echo "isset(\$valor1): " . (isset($valor1) ? "true" : "false") . "<br>";
echo "isset(\$valor2): " . (isset($valor2) ? "true" : "false") . "<br>";
echo "isset(\$valor3): " . (isset($valor3) ? "true" : "false") . "<br>";

echo "<h3>Valores falsos:</h3>";

$variableNoExiste = null;
unset($variableNoExiste);

$variableNoExiste2 = null;
unset($variableNoExiste2);

$variableNoExiste3 = null;
unset($variableNoExiste3);

echo "isset(\$variableNoExiste): " . (isset($variableNoExiste) ? "true" : "false") . "<br>";
echo "isset(\$variableNoExiste2): " . (isset($variableNoExiste2) ? "true" : "false") . "<br>";
echo "isset(\$variableNoExiste3): " . (isset($variableNoExiste3) ? "true" : "false") . "<br>";