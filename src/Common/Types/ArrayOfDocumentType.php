<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfDocumentType implements \Iterator
{
    private $position = 0;

    /**
     * @var DocumentType[]
     */
    private $DocumentType;

    public function current(): DocumentType
    {
        return $this->DocumentType[$this->position];
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
        return isset($this->DocumentType[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
