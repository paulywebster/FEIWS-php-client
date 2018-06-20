<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfKindChange implements \Iterator
{
    private $position = 0;

    /**
     * @var KindChange[]
     */
    private $KindChange;

    public function current(): KindChange
    {
        return $this->KindChange[$this->position];
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
        return isset($this->KindChange[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
