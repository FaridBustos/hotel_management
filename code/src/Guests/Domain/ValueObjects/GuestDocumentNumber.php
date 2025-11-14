<?php

declare(strict_types=1);

namespace Src\Guests\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class GuestDocumentNumber extends DefinedValue
{
    public function verifyValue(): void
    {
    }
}
