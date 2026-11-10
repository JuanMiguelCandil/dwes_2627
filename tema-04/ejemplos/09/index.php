<?php

/**
 * Clase Padre: Producto
 * Clase Hija: Libro sin constructor
 */

require_once __DIR__ . '/class/Producto.php';

$libro1 = new Libro(1, 'El Quijote', 19.99, 'Novela', 5, 900);
echo $libro1->getResumen();