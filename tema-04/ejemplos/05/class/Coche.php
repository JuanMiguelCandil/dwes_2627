<?php
class Coche
{
    private int $velocidad;

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