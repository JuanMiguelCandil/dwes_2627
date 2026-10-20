<!-- css bootstrap 6.0 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

<?php

require_once 'libs/crear_etiquetas.php';

// Imprime un título de nivel 2 con las clases CSS tit-nav y text-center
$array['contenido'] = 'Titulo nivel 2';
$array['etiqueta']  = 'h2';
$array['clase']     = 'tit-nav text-center';
eti_html($array);

$array['contenido'] = 'Párrafo con clase text-center';
$array['etiqueta'] = 'p';
$array['clase'] = 'text-center';
eti_html($array);