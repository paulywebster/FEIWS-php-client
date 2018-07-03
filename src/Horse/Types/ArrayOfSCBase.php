<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfSCBase implements \Iterator
{
    private $position = 0;
    /**
     * @var SCBase
     */
    private $SCBase;

    public function current(): SCBase
    {
        return $this->SCBase[$this->position];
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
        return isset($this->SCBase[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
