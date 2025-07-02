<?php

abstract class Shape
{
    public float $ancho;
    public float $alto;

    function __construct(float $ancho, float $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
}

?>
