<?php

/*
    Controlador procesar
    Descripción: procesa los datos del formulario método GET
*/

$email = htmlspecialchars($_GET['email'] ?? '');
$password = htmlspecialchars($_GET['password'] ?? '');

// Mostrar los datos recibidos en el formulario
echo "<h1>Datos recibidos del formulario</h1>";
echo "<p>Email: $email</p>";
echo "<p>Password: $password</p>";