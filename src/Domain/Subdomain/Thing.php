<?php

declare(strict_types=1);

namespace App\Domain\Subdomain;

abstract readonly class Thing
{
    public function __construct(
        private int $length,
        private int $width,
        private int $height,
    ) {
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }
}
