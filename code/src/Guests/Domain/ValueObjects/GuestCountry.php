<?php

declare(strict_types=1);

namespace Src\Guests\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class GuestCountry extends DefinedValue
{
    public function verifyValue(): void
    {
        // País puede ser nulo → representado como "" (string vacío)
    }
}
