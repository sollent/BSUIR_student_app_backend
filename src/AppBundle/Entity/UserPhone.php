<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserPhone
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_phone")
 */
class UserPhone
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     * @ORM\Column(name="country_code", type="integer")
     */
    private $countryCode;

    /**
     * @var string
     * @ORM\Column(name="home_phone", type="string")
     */
    private $homePhone;

    /**
     * @var string
     * @ORM\Column(name="mobile_phone", type="string")
     */
    private $mobilePhone;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserPhone
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode(): ?int
    {
        return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return UserPhone
     */
    public function setCountryCode(int $countryCode): UserPhone
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    /**
     * @param string $homePhone
     * @return UserPhone
     */
    public function setHomePhone(string $homePhone): UserPhone
    {
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return UserPhone
     */
    public function setMobilePhone(string $mobilePhone): UserPhone
    {
        $this->mobilePhone = $mobilePhone;
        return $this;
    }
}