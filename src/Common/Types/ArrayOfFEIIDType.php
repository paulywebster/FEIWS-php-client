<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfFEIIDType implements \Iterator
{
    private $position = 0;

    /**
     * @var FEIIDType[]
     */
    private $FEIIDType;

    public function current(): FEIIDType
    {
        return $this->FEIIDType[$this->position];
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
        return isset($this->FEIIDType[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
