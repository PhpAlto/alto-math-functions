<?php

namespace Alto\Functions\MathFunctions;

final readonly class MathFunctions
{
    public static function clamp(int|float $value, int|float $min, int|float $max): int|float
    {
        return max($min, min($value, $max));
    }

    public static function inRange(int|float $value, int|float $min, int|float $max): bool
    {
        return $value >= $min && $value <= $max;
    }
}
