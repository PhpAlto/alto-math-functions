<?php

use Alto\Functions\MathFunctions as f;

if (!function_exists('clamp')) {
    /**
     * Clamps a value between a minimum and maximum value.
     *
     * @param int|float $value The value to clamp.
     * @param int|float $min   The minimum value.
     * @param int|float $max   The maximum value.
     * @return int|float The clamped value.
     */
    function clamp(int|float $value, int|float $min, int|float $max): int|float
    {
        return f\MathFunctions::clamp($value, $min, $max);
    }
}

if (!function_exists('in_range')) {
    /**
     * Checks if a value is between a minimum and maximum value.
     *
     * @param int|float $value The value to check.
     * @param int|float $min The minimum value.
     * @param int|float $max The maximum value.
     * @return bool True if the value is between the min and max, false otherwise.
     */
    function in_range(int|float $value, int|float $min, int|float $max): bool
    {
        return f\MathFunctions::inRange($value, $min, $max);
    }
}
