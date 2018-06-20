<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfLookupDate implements \Iterator
{
    private $position = 0;

    /**
     * @var LookupDate[]
     */
    private $LookupDate;

    public function current(): LookupDate
    {
        return $this->LookupDate[$this->position];
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
        return isset($this->LookupDate[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
