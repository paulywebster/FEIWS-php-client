<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfSearchCriteria implements \Iterator
{
    private $position = 0;
    /**
     * @var SearchCriteria
     */
    private $SearchCriteria;

    public function current(): SearchCriteria
    {
        return $this->SearchCriteria[$this->position];
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
        return isset($this->SearchCriteria[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
