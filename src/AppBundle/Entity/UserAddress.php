<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserAddress
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_address")
 */
class UserAddress
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="address_index", type="string")
     */
    private $index;

    /**
     * @var string
     * @ORM\Column(name="country", type="string")
     */
    private $country;

    /**
     * @var string
     * @ORM\Column(name="area", type="string")
     */
    private $area;

    /**
     * @var string
     * @ORM\Column(name="raion", type="string")
     */
    private $raion;

    /**
     * @var string
     * @ORM\Column(name="type_of_point", type="string")
     */
    private $typeOfPoint;

    /**
     * @var string
     * @ORM\Column(name="name_of_point", type="string")
     */
    private $nameOfPoint;

    /**
     * @var string
     * @ORM\Column(name="street_type", type="string")
     */
    private $streetType;

    /**
     * @var string
     * @ORM\Column(name="street_name", type="string")
     */
    private $streetName;

    /**
     * @var integer
     * @ORM\Column(name="house_number", type="integer")
     */
    private $houseNumber;

    /**
     * @var integer
     * @ORM\Column(name="house_part_number", type="integer")
     */
    private $housePartNumber;

    /**
     * @var integer
     * @ORM\Column(name="apartment_number", type="integer")
     */
    private $apartmentNumber;

    /**
     * @var boolean
     * @ORM\Column(name="want_have_home", type="boolean")
     */
    private $wantHaveHome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserAddress
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndex(): ?string
    {
        return $this->index;
    }

    /**
     * @param string $index
     * @return UserAddress
     */
    public function setIndex(string $index): UserAddress
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return UserAddress
     */
    public function setCountry(string $country): UserAddress
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @param string $area
     * @return UserAddress
     */
    public function setArea(string $area): UserAddress
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaion(): ?string
    {
        return $this->raion;
    }

    /**
     * @param string $raion
     * @return UserAddress
     */
    public function setRaion(string $raion): UserAddress
    {
        $this->raion = $raion;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeOfPoint(): ?string
    {
        return $this->typeOfPoint;
    }

    /**
     * @param string $typeOfPoint
     * @return UserAddress
     */
    public function setTypeOfPoint(string $typeOfPoint): UserAddress
    {
        $this->typeOfPoint = $typeOfPoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameOfPoint(): ?string
    {
        return $this->nameOfPoint;
    }

    /**
     * @param string $nameOfPoint
     * @return UserAddress
     */
    public function setNameOfPoint(string $nameOfPoint): UserAddress
    {
        $this->nameOfPoint = $nameOfPoint;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetType(): ?string
    {
        return $this->streetType;
    }

    /**
     * @param string $streetType
     * @return UserAddress
     */
    public function setStreetType(string $streetType): UserAddress
    {
        $this->streetType = $streetType;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return UserAddress
     */
    public function setStreetName(string $streetName): UserAddress
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return int
     */
    public function getHouseNumber(): ?int
    {
        return $this->houseNumber;
    }

    /**
     * @param int $houseNumber
     * @return UserAddress
     */
    public function setHouseNumber(int $houseNumber): UserAddress
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getHousePartNumber(): ?int
    {
        return $this->housePartNumber;
    }

    /**
     * @param int $housePartNumber
     * @return UserAddress
     */
    public function setHousePartNumber(int $housePartNumber): UserAddress
    {
        $this->housePartNumber = $housePartNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getApartmentNumber(): ?int
    {
        return $this->apartmentNumber;
    }

    /**
     * @param int $apartmentNumber
     * @return UserAddress
     */
    public function setApartmentNumber(int $apartmentNumber): UserAddress
    {
        $this->apartmentNumber = $apartmentNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWantHaveHome(): ?bool
    {
        return $this->wantHaveHome;
    }

    /**
     * @param bool $wantHaveHome
     * @return UserAddress
     */
    public function setWantHaveHome(bool $wantHaveHome): UserAddress
    {
        $this->wantHaveHome = $wantHaveHome;
        return $this;
    }
}
