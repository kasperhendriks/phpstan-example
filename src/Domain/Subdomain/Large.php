<?php

declare(strict_types=1);

namespace App\Domain\Subdomain;

final readonly class Large extends Thing
{
    public function __construct(
    ) {
        parent::__construct(
            length: 500,
            width: 500,
            height: 500,
        );
    }
}
