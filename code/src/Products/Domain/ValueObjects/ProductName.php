<?php

declare(strict_types=1);

namespace Src\Products\Domain\ValueObjects;

use Src\Shared\Domain\ValueObjects\DefinedValue;

final class ProductName extends DefinedValue
{
    public function verifyValue(): void
    {
        // Aquí puedes añadir validaciones específicas si quieres.
        // Por ejemplo:
        // $value = $this->getValue();
        // if (strlen($value) === 0 || strlen($value) > 100) {
        //     throw new \InvalidArgumentException('Product name length invalid');
        // }
    }
}
