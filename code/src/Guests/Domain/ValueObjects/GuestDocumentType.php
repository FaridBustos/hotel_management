<?php

declare(strict_types=1);

namespace Src\Guests\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class GuestDocumentType extends DefinedValue
{
    public function verifyValue(): void
    {
        // Aquí podrías limitar valores permitidos: DNI, PASAPORTE, CEDULA...
    }
}
