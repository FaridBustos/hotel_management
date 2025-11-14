<?php

declare(strict_types=1);

namespace Src\Reservations\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class ReservationEndDate extends DefinedValue
{
    public function verifyValue(): void
    {
    }
}
