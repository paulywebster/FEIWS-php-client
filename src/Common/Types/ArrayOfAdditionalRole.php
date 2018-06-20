<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfAdditionalRole implements \Iterator
{
    private $position = 0;

    /**
     * @var AdditionalRole[]
     */
    private $AdditionalRole;

    public function current(): AdditionalRole
    {
        return $this->AdditionalRole[$this->position];
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
        return isset($this->AdditionalRole[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
