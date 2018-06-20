<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfCivility implements \Iterator
{
    private $position = 0;

    /**
     * @var Civility[]
     */
    private $Civility;

    public function current(): Civility
    {
        return $this->Civility[$this->position];
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
        return isset($this->Civility[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
