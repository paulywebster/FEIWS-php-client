<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfOfficialFunction implements \Iterator
{
    private $position = 0;

    /**
     * @var OfficialFunction[]
     */
    private $OfficialFunction;

    public function current(): OfficialFunction
    {
        return $this->OfficialFunction[$this->position];
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
        return isset($this->OfficialFunction[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
