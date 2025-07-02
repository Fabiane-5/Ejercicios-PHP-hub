<?php

include "shape.php";
include "triangulo.php";
include "rectangulo.php";

$triangulo1 = new Triangulo(5, 3);
$rectangulo1 = new Rectangulo(6, 5);

echo $triangulo1->area();
echo "\n";
echo $rectangulo1->area();
