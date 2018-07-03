<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseColor implements \Iterator
{
    private $position = 0;
    /**
     * @var HorseColor
     */
    private $HorseColor;

    public function current(): HorseColor
    {
        return $this->HorseColor[$this->position];
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
        return isset($this->HorseColor[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
