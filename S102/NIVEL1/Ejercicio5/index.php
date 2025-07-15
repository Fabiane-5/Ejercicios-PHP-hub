<?php

grado(10);

function grado(int|float $porcentaje)
{
    if ($porcentaje < 0 || $porcentaje > 100) {
        echo "Porcentaje incorrecto";
        return;
    }

    if ($porcentaje >= 60) {
        echo "Estas en Primera division";
    } else if ($porcentaje >= 45) {
        echo "Estas en Segunda division";
    } else if ($porcentaje >= 33) {
        echo "Estas en Tercera division";
    } else {
        echo "Estas Reprobado";
    }
}
