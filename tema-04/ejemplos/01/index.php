<?php

/**
 * Ejemplo 41
 * Crear la clase Persona con los atributos nombre, edad y sexo.
 * Crear un método constructor que inicialice los atributos de la clase.
 * Crear un método que muestre los datos de la persona.
 * Crear un objeto de la clase Persona y mostrar sus datos.
 */

Class Persona {

    // Propiedades o atributos
    // ? admite valores nulos
    public ?string $nombre;
    public ?int $edad;
    public ?string $sexo;

    public function __construct() {
        $this->nombre = null;
        $this->edad = null;
        $this->sexo = null;
    }
}

// Creamos un objeto a partri de la clase Persona

$persona1 = new Persona();

var_dump($persona1);