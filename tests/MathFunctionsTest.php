<?php

namespace Alto\Functions\MathFunctions\Tests;

use Alto\Functions\MathFunctions\MathFunctions;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(MathFunctions::class)]
class MathFunctionsTest extends TestCase
{
    public function testClamp(): void
    {
        $this->assertEquals(5.0, MathFunctions::clamp(10.0, 1.0, 5.0));
        $this->assertEquals(1.0, MathFunctions::clamp(-1.0, 1.0, 5.0));
        $this->assertEquals(3.0, MathFunctions::clamp(3.0, 1.0, 5.0));
    }

    public function testInRange(): void
    {
        $this->assertTrue(MathFunctions::inRange(3.0, 1.0, 5.0));
        $this->assertFalse(MathFunctions::inRange(0.0, 1.0, 5.0));
        $this->assertFalse(MathFunctions::inRange(6.0, 1.0, 5.0));
    }
}
