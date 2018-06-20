<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfString implements \Iterator
{
    private $position = 0;

    /**
     * @var string[]
     */
    private $string;

    public function current(): string
    {
        return $this->string[$this->position];
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
        return isset($this->string[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
