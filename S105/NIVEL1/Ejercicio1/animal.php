<?php

abstract class Animal
{
    public string $nombre;

    function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    abstract function makeSound();
}
