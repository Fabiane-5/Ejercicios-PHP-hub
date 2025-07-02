<?php

class Perro extends Animal
{
    function makeSound()
    {
        echo $this->nombre . " hace Bup, Bup!" . "\n";
    }
}

?>
