<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfMessageType implements \Iterator
{
    private $position = 0;

    /**
     * @var MessageType[]
     */
    private $MessageType;

    public function current(): MessageType
    {
        return $this->MessageType[$this->position];
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
        return isset($this->MessageType[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
