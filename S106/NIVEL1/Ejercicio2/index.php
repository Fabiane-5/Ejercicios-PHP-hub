<?php

echo "Esta es la ruta completa del archivo: " . __FILE__ . "\n";
echo "Este es el directorio de este archivo: " . __DIR__ . "\n";
echo "Esta es la linea: " . __LINE__ . "\n";

function prueba()
{
    echo "Estás en la función: " . __FUNCTION__ . "\n";
    echo "la funcion empieza en la linea " . (__LINE__ - 2) . "\n";
}

prueba();
