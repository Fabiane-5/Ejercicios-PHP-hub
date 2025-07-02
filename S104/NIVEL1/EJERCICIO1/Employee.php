<?php

class Employee
{
    public string $nombre;
    public float $sueldo;

    function __construct(string $nombre, float $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    function print()
    {
        echo $this->nombre . ", ";
        if ($this->sueldo > 6000) {
            echo "Tiene que pagar impuesto";
        } else {
            echo "No tiene que pagar impuesto";
        }
    }
}
