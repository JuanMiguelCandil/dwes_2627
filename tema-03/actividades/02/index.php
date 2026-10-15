<?php

/*
    Actividad 3.2
    Descripción: Formulario de registro con acceso según perfil de usuario

    Formulario de registro:
    - Nombre usuario
    - Email
    - Contraseña o password
    - Perfil de usuario (admin, edit, user)

    Tipos de perfiles y privilegios:
    - Admin: Añadir, Eliminar, Actualizar y Consultar
    - Edit: Añadir, Actualizar y Consultar
    - User: Consultar
*/

// Modelo

// Negociado
// Crear lista de perfiles
$perfiles = ['admin', 'edit', 'user'];

// Vista
include 'views/index.view.php';