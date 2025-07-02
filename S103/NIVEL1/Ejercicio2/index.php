<?php

$x = array(10, 20, 30, 40, 50, 60);
echo "La longitud del array es: " . count($x) . "\n";

unset($x[2]);  // Se elimino el elemento de la posicion 2 (30)
// echo var_dump($x);

$x = array_values($x); // Se reorganizo el array
// echo var_dump($x);

echo "La longitud del array es: " . count($x) . "\n";
?>