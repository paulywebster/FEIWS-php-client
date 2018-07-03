<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfEnduranceNationalResult implements \Iterator
{
    private $position = 0;
    /**
     * @var EnduranceNationalResult
     */
    private $EnduranceNationalResult;

    public function current(): EnduranceNationalResult
    {
        return $this->EnduranceNationalResult[$this->position];
    }

    public function next(): void
    {
        ++$this->position;
    }

    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        return isset($this->EnduranceNationalResult[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
