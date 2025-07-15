<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

final class NumberCheckerTest extends TestCase {

    private ?NumberChecker $numberChecker;

    protected function setUp(): void {
        $this->numberChecker = new NumberChecker(4);
    }

    protected function tearDown(): void {
        $this->numberChecker = null;
    }

    public function testIsEven(): void {
        $this->assertTrue($this->numberChecker->isEven());
    }

    public function testIsPositive(): void {
        $this->assertTrue($this->numberChecker->isPositive());
    }
}
