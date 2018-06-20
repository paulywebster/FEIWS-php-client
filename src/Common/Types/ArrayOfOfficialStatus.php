<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfOfficialStatus implements \Iterator
{
    private $position = 0;

    /**
     * @var OfficialStatus[]
     */
    private $OfficialStatus;

    public function current(): OfficialStatus
    {
        return $this->OfficialStatus[$this->position];
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
        return isset($this->OfficialStatus[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
