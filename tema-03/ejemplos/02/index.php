<?php

/*
    Ejemplo 32. if, else, elseif y operador ternario
    Descripción: Determinar el item de calificación de un examen

    La calificación sera:
        - suspenso
        - suficiente
        - bien
        - notable
        - sobresaliente
*/

$nota = 7;

if ($nota < 0 || $nota > 10) {
    echo 'La nota tiene que estar entre 0 y 10';
} elseif ($nota < 5) {
    echo 'Suspenso';
} elseif ($nota == 5) {
    echo 'Suficiente';
} elseif ($nota == 6) {
    echo 'Bien';
} elseif ($nota >= 7 && $nota <= 8) {
    echo 'Notable';
} else {
    echo 'Sobresaliente';
}