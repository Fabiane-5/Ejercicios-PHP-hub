<?php

class Persona
{
    public string $nombre;
    public string $apellido;
    public int $edad;

    public function __construct(string $nombre, string $apellido, int $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __toString()
    {
        return "Su nombre es: " . $this->nombre . "\n" . "Su apellido es: " . $this->apellido . "\n" . "Su edad es: " .  $this->edad;
    }
}
