<?php

namespace FEIWebServicesClient\Horse\Types;

use Assert\Assert;
use FEIWebServicesClient\Common\Types\Country;

class HorseOwnership
{
    /**
     * @var string
     */
    private $NationalityOfOwnership;

    /**
     * @var \DateTime
     */
    private $DateFrom;

    /**
     * @var ArrayOfHorseOwnershipMember
     */
    private $Members;

    public function __construct(array $ownership, \DateTimeImmutable $birthDate)
    {
        Assert::that($ownership)
            ->keyExists('NationalityOfOwnership')
            ->keyExists('DateFrom')
            ->keyExists('Members')
            ;
        Assert::that($ownership['DateFrom'])->string()->notBlank();
        Assert::that($ownership['Members'])->isArray()->notEmpty();

        $ownerDateFrom = new \DateTimeImmutable($ownership['DateFrom']);
        if ($ownerDateFrom < $birthDate || $ownerDateFrom > new \DateTimeImmutable('now')) {
            throw new \LogicException('The ownership date from cannot be set before the birthdate or in the future.');
        }
        $this->NationalityOfOwnership = Country::create($ownership['NationalityOfOwnership'])->getCode();
        $this->DateFrom = new \DateTimeImmutable($ownership['DateFrom']);
        $this->Members = new ArrayOfHorseOwnershipMember($ownership['Members']);
    }

    public function data(): array
    {
        return [
            'NationalityOfOwnership' => $this->NationalityOfOwnership,
            'DateFrom' => $this->DateFrom,
            'Members' => $this->Members->data(),
        ];
    }

    /**
     * @return string
     */
    public function getNationalityOfOwnership(): string
    {
        return $this->NationalityOfOwnership;
    }

    /**
     * @return \DateTime
     */
    public function getDateFrom(): \DateTime
    {
        return $this->DateFrom;
    }

    /**
     * @return ArrayOfHorseOwnershipMember
     */
    public function getMembers(): ArrayOfHorseOwnershipMember
    {
        return $this->Members;
    }
}
