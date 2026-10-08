<?php

/*
    Ejemplo 35.
    descripción. if alternativo para plantillas HTML
    Dependiendo del perfil se mostrará un menú de acciones u otro
    Tipos de perfiles:
        - Admin
        - User
*/

// Models

// Negociado
$perfil = 'admin';

// Vista
include 'views/index.view.php';