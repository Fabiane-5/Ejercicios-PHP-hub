<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use function App\grado;

final class GradoTest extends TestCase
{
    public function testPrimeraDivision(): void
    {
        $this->assertSame("Primera Division.", grado(60));
        $this->assertSame("Primera Division.", grado(100));
    }

    public function testSegundaDivision(): void
    {
        $this->assertSame("Segunda Division.", grado(45));
        $this->assertSame("Segunda Division.", grado(59));
    }

    public function testTerceraDivision(): void
    {
        $this->assertSame("Tercera Division.", grado(33));
        $this->assertSame("Tercera Division.", grado(44));
    }

    public function testReprobado(): void
    {
        $this->assertSame("Reprobado", grado(0));
        $this->assertSame("Reprobado", grado(32));
    }

    public function testPorcentajeIncorrecto(): void
    {
        $this->assertSame("Porcentaje incorrecto", grado(-10));
        $this->assertSame("Porcentaje incorrecto", grado(150));
    }
}
