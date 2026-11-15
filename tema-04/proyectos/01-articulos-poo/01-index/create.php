<?php

/*
    fichero: create.php
    @autor: Juan Miguel Candil Pacheco
    @fecha: 2026
    @proyecto: proyecto41
*/

// Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Recoger datos del formulario
$descripcion = trim($_POST['descripcion'] ?? '');
$modelo = trim($_POST['modelo'] ?? '');
$marca = isset($_POST['marca']) && $_POST['marca'] !== '' ? (int)$_POST['marca'] : null;
$categorias = isset($_POST['categorias']) ? array_map('intval', $_POST['categorias']) : [];
$unidades = isset($_POST['unidades']) ? (int)$_POST['unidades'] : null;
$precio = isset($_POST['precio']) ? (float)$_POST['precio'] : null;

// Instanciar el gestor de artículos y cargar los de prueba
$tabla_articulos = new Tarticulos();
$tabla_articulos->addArticulos();

// Generar ID automático (último id + 1)
$articulosActuales = $tabla_articulos->getTarticulos();
$nuevoId = 1;
if (!empty($articulosActuales)) {
    $ids = array_map(function($a) {
        return $a->getId();
    }, $articulosActuales);
    $nuevoId = max($ids) + 1;
}

// Crear el nuevo objeto Articulo
$nuevoArticulo = new Articulo(
    $nuevoId,
    $descripcion,
    $modelo,
    (string)$marca,
    $categorias,
    $unidades,
    $precio
);

// Añadir el artículo al gestor
$tabla_articulos->addArticulo($nuevoArticulo);

// Obtener la colección actualizada de artículos, marcas y categorías para la vista
$articulos = $tabla_articulos->getTarticulos();
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// Cargar la vista principal para mostrar el resultado
include __DIR__ . '/views/index.view.php';