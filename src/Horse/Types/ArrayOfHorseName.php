<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseName implements \Iterator
{
    private $position = 0;
    /**
     * @var HorseName
     */
    private $HorseName;

    public function current(): HorseName
    {
        return $this->HorseName[$this->position];
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
        return isset($this->HorseName[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
