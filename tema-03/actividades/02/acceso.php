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
// Obtener los detalles del formulario de registro
$usuario = $_POST['usuario'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$perfil = $_POST['perfil'] ?? '';

// Validación de los datos del formulario

// Vista
include 'views/acceso.view.php';