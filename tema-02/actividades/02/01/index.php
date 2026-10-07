<?php

$valor_entero = 4;
$cadena = "4Hola Mundo";
$valor_float = 4.5;
$boolean = true;
$resultado1 = $valor_entero * $cadena;
$resultado2 = $valor_entero + $cadena;
$resultado3 = $valor_entero + $valor_float;
$resultado4 = $valor_entero . $cadena;
$resultado5 = $valor_entero + $boolean;
echo "<p>El resultado de la multiplicación es: " . $resultado1 . "</p>";
echo "<p>El resultado de la suma es: " . $resultado2 . "</p>";
echo "<p>El valor de la suma entre entero y float es: " . $resultado3 . "</p>";
echo "<p>El resultado de la concatenación es: " . $resultado4 . "</p>";
echo "<p>El valor de la suma entre entero y boolean es: " . $resultado5 . "</p>";