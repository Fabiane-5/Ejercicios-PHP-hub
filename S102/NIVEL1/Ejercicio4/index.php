<?php

secuencia(2, 10);

function secuencia(int $numeroSecuencia, int $numeroFinal = 10)
{
    for ($i = 0; $i <= $numeroFinal; $i += $numeroSecuencia) {
        echo "Numero: " . $i . "\n";
    }
}
?>
