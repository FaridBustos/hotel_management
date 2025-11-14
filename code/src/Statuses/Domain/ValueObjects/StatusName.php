<?php

declare(strict_types=1);

namespace Src\Statuses\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class StatusName extends DefinedValue
{
    public function verifyValue(): void
    {
        // Aquí podrías validar longitud (1..50), caracteres, etc.
        // $value = (string) $this->getValue();
        // if ($value === '' || mb_strlen($value) > 50) {
        //     throw new \InvalidArgumentException('Status name length invalid');
        // }
    }
}
