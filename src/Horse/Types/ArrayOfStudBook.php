<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfStudBook implements \Iterator
{
    private $position = 0;
    /**
     * @var StudBook
     */
    private $StudBook;

    public function current(): StudBook
    {
        return $this->StudBook[$this->position];
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
        return isset($this->StudBook[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
