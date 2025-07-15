<?php

declare(strict_types=1);

namespace App;

function grado(int|float $porcentaje): string
{
    if ($porcentaje < 0 || $porcentaje > 100) {
        return "Porcentaje incorrecto";
    }

    if ($porcentaje >= 60) {
        return "Primera Division.";
    } elseif ($porcentaje >= 45) {
        return "Segunda Division.";
    } elseif ($porcentaje >= 33) {
        return "Tercera Division.";
    } else {
        return "Reprobado";
    }
}
