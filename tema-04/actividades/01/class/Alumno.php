<?php

/**
 * Actividad 4.1
 */

class Alumno {

    private ?int $id;
    private ?string $nombre;
    private ?string $apellidos;
    private ?string $poblacion;
    private ?string $email;
    private ?int $telefono;
    private ?string $curso;

    function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $poblacion = null,
        ?string $email = null,
        ?int $telefono = null,
        ?string $curso = null
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->poblacion = $poblacion;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->curso = $curso;
    }

    // Getters & Setters

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getPoblacion() {
        return $this->poblacion;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getCurso(){
        return $this->curso;
    }
}