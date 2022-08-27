<?php

declare(strict_types=1);
require_once(__DIR__ . '/../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use PhpunitPrimer\Era\Era;

final class eraTest extends TestCase{
    public function testInt(){
        $this->assertSame('令和4年', (new Era(2022, 1, 1))->getString());
        $this->assertSame('平成12年',(new Era(2000, 1, 1))->getString());
        $this->assertSame('昭和12年',(new Era(1937, 1, 1))->getString());
        $this->assertSame('昭和64年',(new Era(1989, 1, 1))->getString());
        $this->assertSame('平成31年',(new Era(2019, 1, 1))->getString());
        $this->assertSame('令和元年', (new Era(2019, 6, 1))->getString());
    }
}