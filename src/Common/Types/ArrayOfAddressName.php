<?php

namespace FEIWebServicesClient\Common\Types;

class ArrayOfAddressName implements \Iterator
{
    private $position = 0;

    /**
     * @var AddressName[]
     */
    private $AddressName;

    public function current(): AddressName
    {
        return $this->AddressName[$this->position];
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
        return isset($this->AddressName[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
