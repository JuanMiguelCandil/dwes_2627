<?php

/*
    Parámetros por valor o referencia:
    - Por valor: se pasa una copia del valor de la variable a la función. Los cambios realizados dentro de la función no afectan a la variable original.
    - Por referencia: se pasa la dirección de memoria de la variable a la función. Los cambios realizados dentro de la función afectan a la variable original.
*/

// Parámetro por valor
function sumar_uno(int $x) {
    $x++;
    return $x;
}
$a = 2;
echo sumar_uno($a); // 3
echo $a; // 2, La variable original no se modifica

// Parámetro por referencia
function sumar_dos(int &$x) {
    $x += 2;
    return $x;
}
$b = 2;
echo sumar_dos($b); // 4
echo $b; // 4, La variable original se modifica