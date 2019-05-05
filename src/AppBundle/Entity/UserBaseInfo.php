<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserBaseInfo
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_base_info")
 */
class UserBaseInfo
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="first_name", type="string")
     */
    private $firstName;

    /**
     * @var string
     * @ORM\Column(name="last_name", type="string")
     */
    private $lastName;

    /**
     * @var string
     * @ORM\Column(name="third_name", type="string")
     */
    private $thirdName;

    /**
     * @var \DateTime
     * @ORM\Column(name="birth_day", type="datetime", nullable=true)
     */
    private $birthDay;

    /**
     * @var boolean
     * @ORM\Column(name="is_man", type="boolean", nullable=true)
     */
    private $isMan;

    /**
     * @var boolean
     * @ORM\Column(name="is_women", type="boolean", nullable=true)
     */
    private $isWomen;

    /**
     * @var string
     * @ORM\Column(name="protection_info", type="text", nullable=true, nullable=true)
     */
    private $protectionInfo;

    /**
     * @var float
     * @ORM\Column(name="average_mark", type="float")
     */
    private $averageMark;

    /**
     * @var boolean
     * @ORM\Column(name="is_free_position", type="boolean", nullable=true)
     */
    private $isFreePosition;

    /**
     * @var boolean
     * @ORM\Column(name="is_not_free_position", type="boolean", nullable=true)
     */
    private $isNotFreePosition;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserBaseInfo
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return UserBaseInfo
     */
    public function setFirstName(string $firstName): UserBaseInfo
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return UserBaseInfo
     */
    public function setLastName(string $lastName): UserBaseInfo
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getThirdName(): ?string
    {
        return $this->thirdName;
    }

    /**
     * @param string $thirdName
     * @return UserBaseInfo
     */
    public function setThirdName(string $thirdName): UserBaseInfo
    {
        $this->thirdName = $thirdName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBirthDay(): ?\DateTime
    {
        return $this->birthDay;
    }

    /**
     * @param \DateTime $birthDay
     * @return UserBaseInfo
     */
    public function setBirthDay(\DateTime $birthDay): UserBaseInfo
    {
        $this->birthDay = $birthDay;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMan(): ?bool
    {
        return $this->isMan;
    }

    /**
     * @param bool $isMan
     * @return UserBaseInfo
     */
    public function setIsMan(bool $isMan): UserBaseInfo
    {
        $this->isMan = $isMan;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWomen(): ?bool
    {
        return $this->isWomen;
    }

    /**
     * @param bool $isWomen
     * @return UserBaseInfo
     */
    public function setIsWomen(bool $isWomen): UserBaseInfo
    {
        $this->isWomen = $isWomen;
        return $this;
    }

    /**
     * @return string
     */
    public function getProtectionInfo(): ?string
    {
        return $this->protectionInfo;
    }

    /**
     * @param string $protectionInfo
     * @return UserBaseInfo
     */
    public function setProtectionInfo(string $protectionInfo): UserBaseInfo
    {
        $this->protectionInfo = $protectionInfo;
        return $this;
    }

    /**
     * @return float
     */
    public function getAverageMark(): ?float
    {
        return $this->averageMark;
    }

    /**
     * @param float $averageMark
     * @return UserBaseInfo
     */
    public function setAverageMark(float $averageMark): UserBaseInfo
    {
        $this->averageMark = $averageMark;
        return $this;
    }


    /**
     * @return bool
     */
    public function isFreePosition(): ?bool
    {
        return $this->isFreePosition;
    }

    /**
     * @param bool $isFreePosition
     * @return UserBaseInfo
     */
    public function setIsFreePosition(bool $isFreePosition): UserBaseInfo
    {
        $this->isFreePosition = $isFreePosition;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNotFreePosition(): ?bool
    {
        return $this->isNotFreePosition;
    }

    /**
     * @param bool $isNotFreePosition
     * @return UserBaseInfo
     */
    public function setIsNotFreePosition(bool $isNotFreePosition): UserBaseInfo
    {
        $this->isNotFreePosition = $isNotFreePosition;
        return $this;
    }

}