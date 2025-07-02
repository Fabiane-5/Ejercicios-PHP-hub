<?php

class Triangulo extends Shape
{

    function area(): float
    {
        return ($this->ancho * $this->alto) / 2;
    }
}
