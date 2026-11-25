<?php

/*
    Fichero: TablaLibros.php
    @autor: Juan Miguel Candil Pacheco
    @examen: examen 01 tema 04
*/

require_once __DIR__ . '/Libro.php';

class TablaLibros
{
    public ?array $tlibros;

    public function __construct()
    {
        $this->tlibros = [];
    }

    public static function getCategoria(): array
    {
        return [
            'Ficción',
            'Ciencia',
            'Historia',
            'Biografía',
            'Tecnología',
            'Novela',
            'Deportes',
            'Viajes'
        ];
    }

    public static function getEtiquetas(): array
    {
        return [
            'Bestseller',
            'Clásico',
            'Recomendado',
            'Nuevo',
            'Popular',
            'Premiado',
            'Educativo',
            'Inspirador'
        ];
    }

    public function addLibros(): void
    {
        $this->tlibros = [
            new Libro(1, 'El Quijote', new DateTime('1960-01-01'), 'Miguel de Cervantes', 1, [5, 3], 1500, 16, 19.99),
            new Libro(2, 'La Sombra del Viento', new DateTime('2001-01-01'), 'Carlos Ruiz Zafón', 1, [4, 5], 400, 10, 15.99),
            new Libro(3, 'Sapiens', new DateTime('2011-01-01'), 'Yuval Noah Harari', 2, [1, 6], 500, 20, 17.99),
            new Libro(4, '1984', new DateTime('1948-01-01'), 'George Orwell', 1, [2, 4], 300, 15, 14.99),
            new Libro(5, 'El Código Da Vinci', new DateTime('2003-01-01'), 'Dan Brown', 1, [1, 4], 450, 12, 16.99)
        ];
    }

    public function create(Libro $libro): void
    {
        $this->tlibros[] = $libro;
    }

    public function read(int $indice): ?Libro
    {
        return $this->tlibros[$indice] ?? null;
    }

    public function update(int $indice, Libro $libro_actualizado): void
    {
        if (isset($this->tlibros[$indice])) {
            $this->tlibros[$indice] = $libro_actualizado;
        }
    }

    public function delete(int $indice): void
    {
        if (isset($this->tlibros[$indice])) {
            unset($this->tlibros[$indice]);
            $this->tlibros = array_values($this->tlibros);
        }
    }

    public function getIndiceById(int $id): ?int
    {
        foreach ($this->tlibros as $indice => $libro) {
            if ($libro->id === $id) {
                return $indice;
            }
        }
        return null;
    }

    public function getSiguienteId(): int
    {
        $maxId = 0;
        foreach ($this->tlibros as $libro) {
            if (($libro->id ?? 0) > $maxId) {
                $maxId = $libro->id;
            }
        }
        return $maxId + 1;
    }

    public function getLibroById(int $id): ?Libro
    {
        foreach ($this->tlibros as $libro) {
            if ($libro->id === $id) {
                return $libro;
            }
        }
        return null;
    }

    public function indice_etiquetas_a_nombres(): array {
        $nombres_etiquetas = [];
        foreach ($this->tlibros as $libro) {
            foreach ($libro->etiquetas ?? [] as $indice) {
                $nombres_etiquetas[] = self::getEtiquetas()[$indice] ?? '';
            }
        }
        return $nombres_etiquetas;
    }
}