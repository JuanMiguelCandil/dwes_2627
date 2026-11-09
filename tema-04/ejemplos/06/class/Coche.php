<?php
class Coche
{
    protected int $velocidad;

    public function __construct()
    {
        $this->velocidad = 0;
    }

    // Definir getters y setters
    // Atributo Velocidad
    public function getVelocidad(): int {
        return $this->velocidad;
    }

    public function setVelocidad(int $velocidad): void {
        $this->velocidad = $velocidad;
    }

    public function aumentarVelocidad(): void
    {
        $this->velocidad++;
    }
    public function parar(): void
    {
        $this->velocidad = 0;
    }
}
$coche = new Coche();

$coche->setVelocidad(1000);

echo $coche->getVelocidad();

// Hereda los atributos y métodos de la clase padre Coche
class Deportivo Extends Coche {

    public function aumentarVelocidad(): void
    {
        $this->velocidad = $this->velocidad * 2;
    }
}

$coche_deportivo = new Deportivo();
$coche_deportivo->parar();
$coche_deportivo->setVelocidad(300);
$coche_deportivo->aumentarVelocidad();
echo $coche_deportivo->getVelocidad();