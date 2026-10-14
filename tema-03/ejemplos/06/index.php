<?php

/*
    Ejemplo 06. Estructura switch como alternativa
    if elseif
    Descripción: Dada una nota, se ha de devolver el
    item de calificación:
        - Insuficiente
        - Suficiente
        - Bien
        - Notable
        - Sobresaliente
*/

$nota = 7;

// Estructura switch - evalua un conjunto de condiciones
switch(true) {
    case($nota < 5):
        echo "Insuficiente";
        break;
    case($nota < 6):
        echo "Suficiente";
        break;
    case($nota < 7):
        echo "Bien";
        break;
    case($nota < 9):
        echo "Notable";
        break;
    case($nota <= 10):
        echo "Sobresaliente";
        break;
    default:
        echo "Valor no permitido";
}