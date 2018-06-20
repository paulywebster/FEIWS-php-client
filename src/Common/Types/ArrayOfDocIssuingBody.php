<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfDocIssuingBody implements \Iterator
{
    private $position = 0;
    /**
     * @var DocIssuingBody[]
     */
    private $DocIssuingBody;

    public function current(): DocIssuingBody
    {
        return $this->DocIssuingBody[$this->position];
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
        return isset($this->DocIssuingBody[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
