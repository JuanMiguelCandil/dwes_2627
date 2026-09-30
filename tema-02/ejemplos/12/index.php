<?php

// is_null() Devuelve verdadero:
// Asigna el valor null a la variable
// Cuando la variable no ha sido definida
// Cuando esté definida sin valor asignado
// Cuando la variable se ha eliminado con unset()

/*
    isset(): determina si una variable ha sido declarada y su valor no es null
    Devuelve verdadero:
    - Cuando la variable ha sido definida
*/

// $var = null;
// if (is_null($var3)) {
//     echo "La variable es nula<br>";
// } else {
//     echo "La variable no es nula<br>";
// }

// $var1 = null;
// if (isset($var1)) {
//     echo "La variable está definida<br>";
// } else {
//     echo "La variable no está definida<br>";
// }

// $var2 = 10;
// if (isset($var2)) {
//     echo "La variable está definida<br>";
// } else {
//     echo "La variable no está definida<br>";
// }

$var = null;

if (empty($var)) {
    echo "La variable está vacía<br>";
} else {
    echo "La variable no está vacía<br>";
}