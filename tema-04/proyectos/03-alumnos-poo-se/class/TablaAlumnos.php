<?php

/*
    Archivo: TablaAlumnos.php
    Descripción: Clase TablaAlumnos, se trata de un array de  objetos de la clase Alumno.
    Caracteristicas: POO con encapusulamiento.
    Atributos:
        - talumnos []
    Métodos: 
        - constructor
        - create()
        - update()
        - delete()
        - addAlumnos()
        - getAsignaturas()
        - getCursos()
*/

// Tabla que va a contener una array de objetos de la clase Alumno
class TablaAlumnos
{

    public ?array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }

    /*
        Método getAsignaturas()
        Descripción: Devuelve un array con todos los tipos de asignaturas disponibles
    */
    public static function getAsignaturas(): ?array
    {
        $asignaturas = [
            'DWES',
            'DWEC',
            'Despliegue Aplicaciones',
            'HLC',
            'EINEM',
            'Diseño de Interfaces',
            'IPE',
            'Ingles'
        ];

        return $asignaturas;
    }

    /*
        Método getCursos()
        Descripción: Devuelve un array con todos los tipos de cursos disponibles
    */
    public static function getCursos(): ?array {
        $cursos = [
            '1º DAW',
            '2º DAW',
            '1º AD',
            '2º AD',
            '1º SMR',
            '2º SMR'
        ];

        return $cursos;
    }

    /*
        Método addAlumnos()
        Descripción: Devuelve un array con todos los alumnos disponibles
    */
    public function addAlumnos()
    {
        $alumno = new Alumno(
            1,
            'Juan',
            'Pérez',
            'juan.perez@example.com',
            new DateTime('1998-07-18'),
            0,
            [0, 1, 3]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            2,
            'María',
            'García',
            'maria.garcia@example.com',
            new DateTime('2003-05-12'),
            1,
            [7]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            3,
            'Pedro',
            'López',
            'pedro.lopez@example.com',
            new DateTime('1995-09-30'),
            2,
            [4, 5]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            4,
            'Laura',
            'Martínez',
            'laura.martinez@example.com',
            new DateTime('2007-03-25'),
            3,
            [2, 6]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            5,
            'Carlos',
            'González',
            'carlos.gonzalez@example.com',
            new DateTime('2002-11-10'),
            4,
            [1,2,3]
        );

        $this->talumnos[] = $alumno;

        $alumno = new Alumno(
            6,
            'Ana',
            'Sánchez',
            'ana.sanchez@example.com',
            new DateTime('1994-02-05'),
            5,
            [0,7]
        );

        $this->talumnos[] = $alumno;
    }

    /*
        método: getAlumnoById()
        Descripción: Devuelve un objeto de la clase Alumno a partir de su id
    */
    public function getAlumnoById(int $id): ?Alumno
    {
        foreach ($this->talumnos as $alumno) {
            if ($alumno->id === $id) {
                return $alumno;
            }
        }
        return null;
    }

    /*
        método: getIndiceById()
        Descripción: Devuelve el indice del array de alumnos a partir de su id
    */
    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) {
            if ($alumno->id === $id) {
                return $indice;
            }
        }
        return null;
    }
    
    /*
        Método create()
        Descripción: Añade un objeto de la clase Alumno al array de alumnos
    */
    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    /*
        método: update()
        Descripción: Actualiza un objeto de la clase Alumno a partir de su indice
    */
    public function update(int $indice, Alumno $alumno_actualizado): void
    {
        
        $this->talumnos[$indice] = $alumno_actualizado;
       
    }

    /*
        método: delete()
        Descripción: Elimina un objeto de la clase Alumno a partir de su indice
    */
    public function delete(int $indice): void
    {
        unset($this->talumnos[$indice]);
        
        // Reindexar el array para mantener los índices consecutivos
        $this->talumnos = array_values($this->talumnos);
    }
}