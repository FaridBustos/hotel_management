<?php

declare(strict_types=1);

namespace Src\Statuses\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class StatusDescription extends DefinedValue
{
    public function verifyValue(): void
    {
        // Descripción puede ser vacía (nullable en DB → string vacío aquí).
        // $value = (string) $this->getValue();
        // if (mb_strlen($value) > 255) {
        //     throw new \InvalidArgumentException('Status description too long');
        // }
    }
}
