<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfMessage implements \Iterator
{
    private $position = 0;

    /**
     * @var Message[]
     */
    private $Message;

    public function current(): Message
    {
        return $this->Message[$this->position];
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
        return isset($this->Message[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
