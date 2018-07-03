<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseDuplicate implements \Iterator
{
    private $position = 0;
    /**
     * @var HorseDuplicate
     */
    private $HorseDuplicate;

    public function current(): HorseDuplicate
    {
        return $this->HorseDuplicate[$this->position];
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
        return isset($this->HorseDuplicate[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
