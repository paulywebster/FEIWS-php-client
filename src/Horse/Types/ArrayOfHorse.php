<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorse implements \Iterator, \Countable
{
    private $position = 0;
    /**
     * @var array Horse
     */
    private $Horse;

    public function count()
    {
        return count($this->Horse);
    }

    public function current(): Horse
    {
        return $this->Horse[$this->position];
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
        return isset($this->Horse[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
