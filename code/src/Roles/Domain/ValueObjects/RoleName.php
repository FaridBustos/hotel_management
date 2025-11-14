<?php

declare(strict_types=1);

namespace Src\Roles\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class RoleName extends DefinedValue
{
    public function verifyValue(): void
    {
        // Opcional: Validar longitud
        // $value = trim((string)$this->getValue());
        // if ($value === '' || mb_strlen($value) > 50) {
        //     throw new \InvalidArgumentException("Role name length invalid");
        // }
    }
}
