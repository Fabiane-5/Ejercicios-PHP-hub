<?php
include "persona.php";

$persona1 = new Persona("Fabian", "Garcia", 33); // llama al metodo constructor
echo $persona1->nombre; // llama al metodo magico __get
echo "\n";
echo $persona1; // llama directamente al metodo magico __toString
echo "\n";
$persona1->nombre = "Ruben"; // llama al metodo magico __set
echo $persona1;
