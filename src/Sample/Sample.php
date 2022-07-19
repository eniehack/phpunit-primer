<?php
declare(strict_types=1);

namespace PhpunitPrimer\Sample;

require 'vendor/autoload.php';

class Sample {
    public function __construct() {}

    public function twice(int|float $n): int|float {
        return $n * 2;
    }
}
