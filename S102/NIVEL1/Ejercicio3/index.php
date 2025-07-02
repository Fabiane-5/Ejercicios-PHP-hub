<?php

$x = 10; // variable de tipo int
$y = 5; // variable de tipo int
$n = 33.55; // variable de tipo double
$m = 6.754; // variable de tipo double

echo $x . "\n";
echo $y . "\n";
echo "$x + $y = " . ($x + $y) . "\n";
echo "$x - $y = " . ($x - $y) . "\n";
echo "$x * $y = " . ($x * $y) . "\n";
echo "$x % $y = " . ($x % $y) . "\n";

echo $n . "\n";
echo $m . "\n";
echo "$n + $m = " . ($n + $m) . "\n";
echo "$n - $m = " . ($n - $m) . "\n";
echo "$n * $m = " . ($n * $m) . "\n";
echo "$n % $m = " . ($n % $m) . "\n";

echo "El doble de $x es: " . $x * 2 . "\n";
echo "El doble de $y es: " . $y * 2 . "\n";
echo "El doble de $n es: " . $n * 2 . "\n";
echo "El doble de $m es: " . $m * 2 . "\n";

echo "La suma de todas las variables es: " . ($x + $y + $n + $m) . "\n";

echo "El producto de todas las variables es: " . ($x * $y * $n * $m) . "\n";

calculadora(10, 5, '*');

function calculadora(int|float $numero1, int|float $numero2, $operador)
{
    switch ($operador) {
        case '+':
            echo "$numero1 + $numero2 = " . ($numero1 + $numero2);
            break;
        case '-':
            echo "$numero1 - $numero2 = " . ($numero1 - $numero2);
            break;
        case '*':
            echo "$numero1 * $numero2 = " . ($numero1 * $numero2);
            break;
        case '/':
            echo "$numero1 / $numero2 = " . ($numero1 / $numero2);
            break;
        default:
            echo "Operador no valido, solo se puede sumar, restar, multiplicar y dividir \n";
    }
}
?>

