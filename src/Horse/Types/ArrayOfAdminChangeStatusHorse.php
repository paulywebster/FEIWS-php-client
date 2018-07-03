<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfAdminChangeStatusHorse implements \Iterator
{
    private $position = 0;
    /**
     * @var AdminChangeStatusHorse
     */
    private $AdminChangeStatusHorse;

    public function current(): AdminChangeStatusHorse
    {
        return $this->AdminChangeStatusHorse[$this->position];
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
        return isset($this->AdminChangeStatusHorse[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
