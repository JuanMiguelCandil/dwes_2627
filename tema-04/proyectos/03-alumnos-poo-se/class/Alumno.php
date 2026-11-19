<?php

/*
    fichero: Articulos.php
    @autor: Juan Miguel Candil Pacheco
    @fecha: 
    @proyecto: proyecto43
*/

Class Alumno {

    public ?int $id;
    public ?string  $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?DateTime $f_nacimiento;
    public ?string $curso;
    public ?array $asignaturas;

    // Método constructor con encapsulamiento
    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?DateTime $f_nacimiento = null,
        ?string $curso = null,
        ?array $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas;
    }

    public function getEdad(): ?int {
        if ($this->f_nacimiento instanceof DateTime) {
            $hoy = new DateTime();
            $edad = $hoy->diff($this->f_nacimiento)->y;
            return $edad;
        }
        return null;
    }
}