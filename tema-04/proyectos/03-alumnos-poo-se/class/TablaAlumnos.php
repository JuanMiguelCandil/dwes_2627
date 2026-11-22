<?php

/*
    Archivo: TablaAlumnos.php
    Descripción: Clase TablaAlumnos, array de objetos de la clase Alumno.
    Características: POO sin encapsulamiento.
*/

require_once __DIR__ . '/Alumno.php';

class TablaAlumnos
{
    public ?array $talumnos;

    public function __construct()
    {
        $this->talumnos = [];
    }

    public static function getAsignaturas(): array
    {
        return [
            'DWES',
            'DWEC',
            'Despliegue Aplicaciones',
            'HLC',
            'EINEM',
            'Diseño de Interfaces',
            'IPE',
            'Ingles'
        ];
    }

    public static function getCursos(): array
    {
        return [
            '1º DAW',
            '2º DAW',
            '1º AD',
            '2º AD',
            '1º SMR',
            '2º SMR'
        ];
    }

    public function addAlumnos(): void
    {
        $this->talumnos = [
            new Alumno(1, 'Juan', 'Pérez', 'juan.perez@example.com', new DateTime('1998-07-18'), 0, [0, 1, 3]),
            new Alumno(2, 'María', 'García', 'maria.garcia@example.com', new DateTime('2003-05-12'), 1, [7]),
            new Alumno(3, 'Pedro', 'López', 'pedro.lopez@example.com', new DateTime('1995-09-30'), 2, [4, 5]),
            new Alumno(4, 'Laura', 'Martínez', 'laura.martinez@example.com', new DateTime('2007-03-25'), 3, [2, 6]),
            new Alumno(5, 'Carlos', 'González', 'carlos.gonzalez@example.com', new DateTime('2002-11-10'), 4, [1, 2, 3]),
            new Alumno(6, 'Ana', 'Sánchez', 'ana.sanchez@example.com', new DateTime('1994-02-05'), 5, [0, 7]),
        ];
    }

    public function create(Alumno $alumno): void
    {
        $this->talumnos[] = $alumno;
    }

    public function read(int $indice): ?Alumno
    {
        return $this->talumnos[$indice] ?? null;
    }

    public function update(int $indice, Alumno $alumno_actualizado): void
    {
        if (isset($this->talumnos[$indice])) {
            $this->talumnos[$indice] = $alumno_actualizado;
        }
    }

    public function delete(int $indice): void
    {
        if (isset($this->talumnos[$indice])) {
            unset($this->talumnos[$indice]);
            $this->talumnos = array_values($this->talumnos);
        }
    }

    public function getAlumnoById(int $id): ?Alumno
    {
        foreach ($this->talumnos as $alumno) {
            if ($alumno->id === $id) {
                return $alumno;
            }
        }
        return null;
    }

    public function getIndiceById(int $id): ?int
    {
        foreach ($this->talumnos as $indice => $alumno) {
            if ($alumno->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    public function getSiguienteId(): int
    {
        $maxId = 0;
        foreach ($this->talumnos as $alumno) {
            if (($alumno->id ?? 0) > $maxId) {
                $maxId = $alumno->id;
            }
        }
        return $maxId + 1;
    }

    /**
     * Ordena el array de alumnos por el campo indicado ('id', 'alumno', 'email', 'f_nacimiento', 'edad', 'curso')
     */
    public function ordenarPor(string $campo = 'id', string $direccion = 'asc'): void
    {
        $cursos = self::getCursos();
        $factor = ($direccion === 'desc') ? -1 : 1;

        usort($this->talumnos, function (Alumno $a, Alumno $b) use ($campo, $cursos, $factor): int {
            $cmp = match ($campo) {
                'alumno' => strcasecmp(($a->apellidos ?? '') . ' ' . ($a->nombre ?? ''), ($b->apellidos ?? '') . ' ' . ($b->nombre ?? '')),
                'email' => strcasecmp($a->email ?? '', $b->email ?? ''),
                'f_nacimiento' => ($a->f_nacimiento?->getTimestamp() ?? 0) <=> ($b->f_nacimiento?->getTimestamp() ?? 0),
                'edad' => ($a->getEdad() ?? -1) <=> ($b->getEdad() ?? -1),
                'curso' => strcasecmp($cursos[$a->curso ?? -1] ?? '', $cursos[$b->curso ?? -1] ?? ''),
                default => ($a->id ?? 0) <=> ($b->id ?? 0),
            };
            return $cmp * $factor;
        });
    }

    /**
     * Filtra los alumnos por criterio de búsqueda (id, nombre, apellidos, email, curso o asignaturas)
     */
    public function buscar(string $termino): array
    {
        $termino = mb_strtolower(trim($termino));
        if ($termino === '') {
            return $this->talumnos;
        }

        $cursos = self::getCursos();
        $asignaturas = self::getAsignaturas();

        return array_values(array_filter($this->talumnos, function (Alumno $alumno) use ($termino, $cursos, $asignaturas): bool {
            $nombreCurso = mb_strtolower($cursos[$alumno->curso ?? -1] ?? '');
            $nombresAsignaturas = mb_strtolower(implode(', ', array_map(
                fn($idx) => $asignaturas[$idx] ?? '',
                $alumno->asignaturas ?? []
            )));

            $textoAlumno = mb_strtolower(
                ($alumno->id ?? '') . ' ' .
                ($alumno->nombre ?? '') . ' ' .
                ($alumno->apellidos ?? '') . ' ' .
                ($alumno->email ?? '') . ' ' .
                $nombreCurso . ' ' .
                $nombresAsignaturas
            );

            return str_contains($textoAlumno, $termino);
        }));
    }
}