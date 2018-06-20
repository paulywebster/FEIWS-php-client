<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfNationalFederation implements \Iterator
{
    private $position = 0;

    /**
     * @var NationalFederation[]
     */
    private $NationalFederation;

    public function current(): NationalFederation
    {
        return $this->NationalFederation[$this->position];
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
        return isset($this->NationalFederation[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
