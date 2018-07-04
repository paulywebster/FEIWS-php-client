<?php

namespace FEIWebServicesClient\Horse\Types;

class ArrayOfHorseOwnershipMember implements \Iterator
{
    private $position = 0;
    /**
     * @var [] HorseOwnershipMember
     */
    private $HorseOwnershipMember;

    public function __construct(array $members)
    {
        $totalPercentageOwnership = 0;
        foreach ($members as $member) {
            $HorseOwnershipMember = new HorseOwnershipMember($member);
            $this->HorseOwnershipMember[] = $HorseOwnershipMember;
            $totalPercentageOwnership += $HorseOwnershipMember->getOwnershipPercentage();
        }

        if (100 != $totalPercentageOwnership) {
            throw new \LogicException(sprintf('The total percentage of ownership must be equals to 100. %s given.', $totalPercentageOwnership));
        }
    }

    public function data(): array
    {
        return $this->HorseOwnershipMember;
    }

    public function current(): HorseOwnershipMember
    {
        return $this->HorseOwnershipMember[$this->position];
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
        return isset($this->HorseOwnershipMember[$this->position]);
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
