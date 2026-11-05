<?php

/**
 * Clase: Cliente
 * 
 * Atributos: 
 *  - Nombre
 *  - Población
 *  - DNI
 * 
 * Métodos:
 *  - construct() - inicializar los atributos
 */

class Cliente  {

    private ?string $nombre;
    private ?string $poblacion;
    private ?string $dni;

    public function __construct() {
        $this->nombre = null;
        $this->poblacion = null;
        $this->dni = null;
    }

    // getters & setters
    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPoblacion(): string {
        return $this->poblacion;
    }

    public function getDni(): string {
        return $this->dni;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setPoblacion(string $poblacion): void {
        $this->poblacion = $poblacion;
    }

    public function setDni(string $dni): void {
        $this->dni = $dni;
    }
}