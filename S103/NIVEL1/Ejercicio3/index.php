<?php

$arrayPalabras = ["hola", "comida", "puertO"];
$caracter = 'o';
$encontro = encontrarCaracter($arrayPalabras, $caracter);

if ($encontro) {
    echo "El caracter esta en cada palabra del array";
} else {
    echo "El caracter NO esta en todas las palabras del array";
}


function encontrarCaracter(array $arrayPalabras, string $caracter): bool
{
    for ($i = 0; $i < count($arrayPalabras); $i++) {
        $posicion = stripos($arrayPalabras[$i], $caracter[0]);
        if ($posicion == null) {
            return false;
        }
    }
    return true;
}
?>