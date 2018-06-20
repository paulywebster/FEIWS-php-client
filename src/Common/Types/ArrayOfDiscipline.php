<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfDiscipline implements \Iterator
{
    private $position = 0;

    /**
     * @var Discipline[]
     */
    private $Discipline;

    public function current(): Discipline
    {
        return $this->Discipline[$this->position];
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
        return isset($this->Discipline[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
