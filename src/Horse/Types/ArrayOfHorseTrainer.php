<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseTrainer implements \Iterator
{
    private $position = 0;
    /**
     * @var HorseTrainer
     */
    private $HorseTrainer;

    public function current(): HorseTrainer
    {
        return $this->HorseTrainer[$this->position];
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
        return isset($this->HorseTrainer[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
