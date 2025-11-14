<?php

declare(strict_types=1);

namespace Src\Reservations\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class ReservationCreationDate extends DefinedValue
{
    public function verifyValue(): void
    {
        // Validar DATETIME si deseas
    }
}
