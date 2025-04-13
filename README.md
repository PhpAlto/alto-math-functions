# Math Functions

## Installation

```bash
composer require alto/math-functions
```

## Functions

### `clamp`

Returns a value clamped between a minimum and maximum value.

```php
clamp(float|int $value, float|int $min, float|int $max): float|int
```

### `in_range`

Returns true if a value is within a specified range.

```php
in_range(float|int $value, float|int $min, float|int $max): bool
```

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
