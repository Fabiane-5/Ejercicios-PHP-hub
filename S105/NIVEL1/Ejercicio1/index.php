<?php

include "animal.php";
include "perro.php";
include "gato.php";

$perro1 = new Perro("Barry");
$gato1 = new Gato("Micaela");

$perro1->makeSound();
$gato1 ->makeSound();
