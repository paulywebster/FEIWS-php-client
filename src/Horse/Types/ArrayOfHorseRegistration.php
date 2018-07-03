<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseRegistration implements \Iterator
{
    private $position = 0;
    /**
     * @var HorseRegistration
     */
    private $HorseRegistration;

    public function current(): HorseRegistration
    {
        return $this->HorseRegistration[$this->position];
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
        return isset($this->HorseRegistration[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
