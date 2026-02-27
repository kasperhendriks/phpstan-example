<?php

declare(strict_types=1);

namespace App\Domain\Subdomain;

final readonly class Medium extends Thing
{
    public function __construct(
    ) {
        parent::__construct(
            length: 200,
            width: 200,
            height: 200,
        );
    }
}
