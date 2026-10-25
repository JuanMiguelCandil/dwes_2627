<?php
/*
    update.php
    Actualiza los datos del artículo a partir del formulario de edición.

    @package CRUD Artículos
    @author Juan Miguel Candil Pacheco
    @version 1.0

    Tabla artículos:
    - id (INT, PRIMARY KEY, AUTO_INCREMENT)
    - descripcion (VARCHAR(255))
    - modelo (VARCHAR(255))
    - categoria (VARCHAR(255))
    - unidades (INT)
    - precio (INT)
*/

// Cargar las librerías
require_once 'libs/funciones_articulos.php';

// Cargamos los artículos originales
$articulos = generar_tabla_articulos();

// Comprobamos que sea una petición POST y venga el índice
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['indice'])) {
    $indice = $_POST['indice'];
    
    // Si el índice existe en el array, actualizamos con los datos en minúscula
    if (isset($articulos[$indice])) {
        $articulos[$indice]['descripcion'] = htmlspecialchars($_POST['descripcion'] ?? '');
        $articulos[$indice]['modelo'] = htmlspecialchars($_POST['modelo'] ?? '');
        $articulos[$indice]['categoria'] = htmlspecialchars($_POST['categoria'] ?? '');
        $articulos[$indice]['unidades'] = (int)($_POST['unidades'] ?? 0);
        $articulos[$indice]['precio'] = (float)($_POST['precio'] ?? 0.0);
    }
}

// Mostramos la vista principal con el array actualizado para esta ejecución
require_once 'views/index.view.php';