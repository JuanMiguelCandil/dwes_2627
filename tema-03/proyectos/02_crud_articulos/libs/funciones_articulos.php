<?php

/*
    librería: functions.php
    Funciones auxiliares para el proyecto CRUD de artículos.

    Funciones incluidas:
    - generar_tabla_articulos: crea la tabla con los artículos.
    - generar_tabla_categorias: crea las categorias de los artículos.
    - get_indice_articulo_por_id: encuentra el índice del artículo por su id.
*/

function generar_tabla_articulos() {
    return [
        [
            'id' => 1,
            'descripcion' => 'Portátil HP 15-DB0074NS',
            'modelo' => 'HP 15-DB0074NS',
            'categoria' => 'Portátil',
            'unidades' => 120,
            'precio' => 379.00
        ],
        [
            'id' => 2,
            'descripcion' => 'PC Sobremesa Gaming Lenovo',
            'modelo' => 'Lenovo Legion T5',
            'categoria' => 'PC sobremesa',
            'unidades' => 15,
            'precio' => 899.99
        ],
        [
            'id' => 3,
            'descripcion' => 'Tarjeta Gráfica NVIDIA RTX',
            'modelo' => 'RTX 4060 8GB',
            'categoria' => 'Componente',
            'unidades' => 30,
            'precio' => 329.50
        ],
        [
            'id' => 4,
            'descripcion' => 'Monitor Curvo 27"',
            'modelo' => 'Samsung Odyssey G5',
            'categoria' => 'Pantalla',
            'unidades' => 25,
            'precio' => 249.00
        ],
        [
            'id' => 5,
            'descripcion' => 'Impresora Multifunción Láser',
            'modelo' => 'Brother MFC-L2710DW',
            'categoria' => 'Impresora',
            'unidades' => 10,
            'precio' => 175.00
        ]
    ];
}

function generar_tabla_categorias() {
    return ['Portátil', 'PC sobremesa', 'Componente', 'Pantalla', 'Impresora'];
}

function get_indice_articulo_por_id($articulos, $id) {
    foreach ($articulos as $indice => $articulo) {
        if ($articulo['id'] == $id) {
            return $indice;
        }
    }
    return null;
}

function obtener_id_nuevo_articulo($articulos) {
    if (empty($articulos)) {
        return 1;
    }
    $ids = array_column($articulos, 'id');
    return max($ids) + 1;
}