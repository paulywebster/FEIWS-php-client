<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfGender implements \Iterator
{
    private $position = 0;

    /**
     * @var Gender
     */
    private $Gender;

    public function current(): Gender
    {
        return $this->Gender[$this->position];
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
        return isset($this->Gender[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
