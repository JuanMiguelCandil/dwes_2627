<?php

/*
    fichero: new.php
    @autor: Juan Miguel Candil Pacheco
    @fecha: 2026
    @proyecto: proyecto41
*/

// Cargar clases
require_once __DIR__ . '/class/Articulo.php';
require_once __DIR__ . '/class/Tarticulos.php';

// Obtener marcas y categorías mediante métodos estáticos
$marcas = Tarticulos::getMarcas();
$categorias = Tarticulos::getCategorias();

// Cargar la vista del formulario
include __DIR__ . '/views/new.view.php';