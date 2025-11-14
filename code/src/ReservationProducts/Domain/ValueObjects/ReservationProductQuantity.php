<?php

declare(strict_types=1);

namespace Src\ReservationProducts\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class ReservationProductQuantity extends DefinedValue
{
    public function verifyValue(): void
    {
        // Ejemplo de validación:
        // $value = (int) $this->getValue();
        // if ($value <= 0) {
        //     throw new \InvalidArgumentException('Quantity must be greater than zero');
        // }
    }
}
