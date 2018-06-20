<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfCountry implements \Iterator
{
    private $position = 0;

    /**
     * @var Country[]
     */
    private $Country;

    public function current(): Country
    {
        return $this->Country[$this->position];
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
        return isset($this->Country[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
