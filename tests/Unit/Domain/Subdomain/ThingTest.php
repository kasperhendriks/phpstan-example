<?php

declare(strict_types=1);

namespace Tests\Domain\Subdomain;

use App\Domain\Subdomain\Large;
use App\Domain\Subdomain\Medium;
use App\Domain\Subdomain\Small;
use PHPUnit\Framework\TestCase;

class ThingTest extends TestCase
{
    public function testThings(): void
    {
        $small = new Small();
        $this->assertSame(100, $small->getLength());
        $this->assertSame(100, $small->getWidth());
        $this->assertSame(100, $small->getHeight());

        $medium = new Medium();
        $this->assertSame(200, $medium->getLength());
        $this->assertSame(200, $medium->getWidth());
        $this->assertSame(200, $medium->getHeight());

        $large = new Large();
        $this->assertSame(500, $large->getLength());
        $this->assertSame(500, $large->getWidth());
        $this->assertSame(500, $large->getHeight());
    }
}
