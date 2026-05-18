<?php

declare(strict_types=1);

namespace Test\Time;

use Phant\DataStructure\Time\Hour;
use Phant\Error\NotCompliant;

final class HourTest extends \PHPUnit\Framework\TestCase
{
    protected Hour $fixture;

    public function setUp(): void
    {
        $this->fixture = new Hour('12:34');
    }

    public function testInterface(): void
    {
        $this->assertEquals('12:34', (string)$this->fixture);
    }

    public function testNotCompliantHour(): void
    {
        $this->expectException(NotCompliant::class);

        new Hour('24:00');
    }

    public function testNotCompliantMinute(): void
    {
        $this->expectException(NotCompliant::class);

        new Hour('00:60');
    }
}
