<?php

/*
    Tipos de arrays
    - escalares o indexados
*/

// Array escalar o indexado
// $colores = array("rojo", "verde", "azul", "amarillo");

$colores = ["rojo", "verde", "azul", "amarillo"];

// Acceder a un elemento del array
echo $colores[0]; // rojo

// Recorrer un array con un bucle for
for ($i = 0; $i < count($colores); $i++) {
    echo $colores[$i] . "<br>";
}

// Recorrer un array con un bucle foreach
foreach ($colores as $color) {
    echo $color . "<br>";
}

// Agregar elemento array
$colores[] = "naranja"; // agrega el elemento "naranja" al final del array

// Eliminar elemento array
unset($colores[2]); // elimina el elemento "azul"

// Recorrer array mostrando el índice y el valor
foreach ($colores as $indice => $color) {
    echo "Índice: $indice, Color: $color <br>";
}

$colores[2] = "violeta"; // cambia el valor del índice 2 a "violeta"