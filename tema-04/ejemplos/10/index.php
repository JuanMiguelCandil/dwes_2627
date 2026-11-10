<?php

/**
 * Clase Padre: Producto
 * Clase Hija: Libro sin constructor
 */

require_once __DIR__ . '/class/Producto.php';

$libro1 = new Libro(1, 'El Quijote', 19.99, 'Novela', 5, 900);
echo $libro1->getResumen();

echo '<br>';

// La valoración se muestra con el nombre de la clase, seguido de
// los 4 puntos y el nombre de la propiedad estática.
echo 'Valoración: ' . $libro1::$valoracion;