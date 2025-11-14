<?php

declare(strict_types=1);

namespace Src\ReservationReports\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class ReservationReportContent extends DefinedValue
{
    public function verifyValue(): void
    {
        // Aquí podrías validar longitud máxima, etc.
        // $value = (string) $this->getValue();
        // if ($value === '') {
        //     throw new \InvalidArgumentException('Report content cannot be empty');
        // }
    }
}
