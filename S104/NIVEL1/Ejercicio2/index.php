<?php

include "shape.php";
include "triangulo.php";
include "rectangulo.php";

$triangulo1 = new Triangulo(5, 3);
$triangulo2 = new Triangulo(10,5);
$rectangulo1 = new Rectangulo(6, 5);

echo $triangulo1->area();
echo "\n";
echo $triangulo2->area();
echo "\n";
echo $rectangulo1->area();
