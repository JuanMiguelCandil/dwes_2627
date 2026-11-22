<?php

/*
    Fichero: Alumno.php
    @autor: Juan Miguel Candil Pacheco
    @proyecto: proyecto43
*/

class Alumno
{
    public ?int $id;
    public ?string $nombre;
    public ?string $apellidos;
    public ?string $email;
    public ?DateTime $f_nacimiento;
    public ?int $curso;
    public ?array $asignaturas;

    public function __construct(
        ?int $id = null,
        ?string $nombre = null,
        ?string $apellidos = null,
        ?string $email = null,
        ?DateTime $f_nacimiento = null,
        ?int $curso = null,
        ?array $asignaturas = []
    ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->f_nacimiento = $f_nacimiento;
        $this->curso = $curso;
        $this->asignaturas = $asignaturas ?? [];
    }

    // Calcula la edad actual a partir de la fecha de nacimiento
    public function getEdad(): ?int
    {
        if ($this->f_nacimiento instanceof DateTime) {
            $hoy = new DateTime();
            return $hoy->diff($this->f_nacimiento)->y;
        }
        return null;
    }
}