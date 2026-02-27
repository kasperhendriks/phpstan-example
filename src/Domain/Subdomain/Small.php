<?php

declare(strict_types=1);

namespace App\Domain\Subdomain;

final readonly class Small extends Thing
{
    public function __construct(
    ) {
        parent::__construct(
            length: 100,
            width: 100,
            height: 100,
        );
    }
}
