<?php

declare(strict_types=1);

namespace Src\Reservations\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class ReservationStartDate extends DefinedValue
{
    public function verifyValue(): void
    {
        // Validar formato YYYY-MM-DD si deseas
    }
}
