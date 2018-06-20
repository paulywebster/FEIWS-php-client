<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfLeague implements \Iterator
{
    private $position = 0;

    /**
     * @var League[]
     */
    private $League;

    public function current(): League
    {
        return $this->League[$this->position];
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
        return isset($this->League[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
