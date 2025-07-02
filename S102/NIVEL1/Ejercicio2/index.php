<?php

$string = "Hello, world!";
echo $string . "\n";

$stringMayuscula = strtoupper($string);
echo $stringMayuscula . "\n";

$logitudString = strlen($string);
echo "La cantidad de caracteres de ($string) son: " . $logitudString . "\n";

$stringInverso = strrev($string);
echo $stringInverso . "\n";

$string2 = "Este es el curso de PHP";
echo $string . " " . $string2;

?>