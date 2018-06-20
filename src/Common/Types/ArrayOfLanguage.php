<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfLanguage implements \Iterator
{
    private $position = 0;

    /**
     * @var Language[]
     */
    private $Language;

    public function current(): Language
    {
        return $this->Language[$this->position];
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
        return isset($this->Language[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
