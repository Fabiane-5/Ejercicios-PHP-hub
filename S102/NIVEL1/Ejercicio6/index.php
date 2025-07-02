<?php

if (isBitten()) {
    echo "Charlie me mordio el dedo";
} else {
    echo "Charlie NO me mordio el dedo";
}

function isBitten(): bool
{
    return rand(0, 1);
}

?>

