<?php

declare(strict_types=1);

namespace Src\Users\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class UserPassword extends DefinedValue
{
    public function verifyValue(): void
    {
        // Aquí asumes que ya viene cifrada/hasheada.
        // Podrías validar longitud máxima 255 si quieres:
        // $value = (string) $this->getValue();
        // if ($value === '' || mb_strlen($value) > 255) {
        //     throw new \InvalidArgumentException('Invalid user password hash length');
        // }
    }
}
