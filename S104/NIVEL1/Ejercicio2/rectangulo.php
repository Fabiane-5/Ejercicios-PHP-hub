<?php

class Rectangulo extends Shape
{
    function area(): float
    {
        return ($this->ancho * $this->alto);
    }
}
