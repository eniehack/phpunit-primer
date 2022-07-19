<?php

declare(strict_types=1);

require_once(__DIR__ . '/../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;
use PhpunitPrimer\Sample\Sample;

final class SampleTest extends TestCase {
    protected Sample $sample;

    protected function setUp(): void {
        $this->sample = new Sample();
    }

    public function testTwice() {
        $this->assertSame(0, $this->sample->twice(0));
        $this->assertSame(2, $this->sample->twice(1));
    }

    public function testTwiceFloat() {
        $this->assertSame(0.0, $this->sample->twice(0.0));
        $this->assertSame(2.0, $this->sample->twice(1.0));
    }

    /*
     * @test
     * @expectedException TypeError
     */
    public function testTwiceStr() {
        $this->expectError(\TypeError::class);
        $this->sample->twice("a");
    }
}
