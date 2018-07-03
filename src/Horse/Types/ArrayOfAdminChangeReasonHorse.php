<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfAdminChangeReasonHorse implements \Iterator
{
    private $position = 0;
    /**
     * @var AdminChangeReasonHorse
     */
    private $AdminChangeReasonHorse;

    public function current(): AdminChangeReasonHorse
    {
        return $this->AdminChangeReasonHorse[$this->position];
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
        return isset($this->AdminChangeReasonHorse[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
