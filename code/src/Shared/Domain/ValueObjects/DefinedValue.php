<?php

namespace Src\Shared\Domain\ValueObjects;

use Src\Shared\Domain\Exceptions\InvalidArgumentException;

abstract class DefinedValue
{
    protected mixed $value;
    public function __construct(mixed $value)
    {
        $this->value = $value;
        $this->isDefined();
        $this->verifyValue();
    }

    abstract public function verifyValue();

    public function getValue()
    {
        return $this->value;
    }

    private function isDefined(): void
    {
        if (!isset($this->value)) {
            throw new InvalidArgumentException('Value must be defined.');
        }

        if (is_string($this->value) && trim($this->value) === '') {
            throw new InvalidArgumentException('Value cannot be an empty string.');
        }

        if (is_array($this->value) && empty($this->value)) {
            throw new InvalidArgumentException('Value cannot be an empty array.');
        }

        if (is_object($this->value) && $this->value === null) {
            throw new InvalidArgumentException('Value cannot be null.');
        }
    }

}