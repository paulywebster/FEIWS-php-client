<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfCategory implements \Iterator
{
    private $position = 0;

    /**
     * @var Category[]
     */
    private $Category;

    public function current(): Category
    {
        return $this->Category[$this->position];
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
        return isset($this->Category[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
