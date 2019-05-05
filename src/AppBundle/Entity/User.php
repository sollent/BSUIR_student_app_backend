<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="table_user")
 */
class User
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     * @ORM\Column(name="email", type="string")
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="password", type="string")
     */
    private $password;

    /**
     * @var string
     * @ORM\Column(name="token", type="string")
     */
    private $token;

    /**
     * @var UserBaseInfo
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserBaseInfo")
     * @ORM\JoinColumn(name="user_base_info_id", referencedColumnName="id", nullable=true)
     */
    private $userBaseInfo;

    /**
     * @var UserDocuments
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserDocuments")
     * @ORM\JoinColumn(name="user_documents_id", referencedColumnName="id", nullable=true)
     */
    private $userDocuments;

    /**
     * @var UserEducation
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserEducation")
     * @ORM\JoinColumn(name="user_education_id", referencedColumnName="id", nullable=true)
     */
    private $userEducation;

    /**
     * @var UserAddress
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserAddress")
     * @ORM\JoinColumn(name="user_address_id", referencedColumnName="id", nullable=true)
     */
    private $userAddress;

    /**
     * @var UserPhone
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserPhone")
     * @ORM\JoinColumn(name="user_phone_id", referencedColumnName="id", nullable=true)
     */
    private $userPhone;

    /**
     * @var UserSpecial
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\UserSpecial")
     * @ORM\JoinColumn(name="user_special_id", referencedColumnName="id", nullable=true)
     */
    private $userSpecial;

    /**
     * @var boolean
     * @ORM\Column(name="account_complete", type="boolean", nullable=true)
     */
    private $accountComplete;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return User
     */
    public function setName(string $name): User
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): User
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return User
     */
    public function setToken(string $token): User
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return UserBaseInfo
     */
    public function getUserBaseInfo(): ?UserBaseInfo
    {
        return $this->userBaseInfo;
    }

    /**
     * @param UserBaseInfo $userBaseInfo
     * @return User
     */
    public function setUserBaseInfo(UserBaseInfo $userBaseInfo): User
    {
        $this->userBaseInfo = $userBaseInfo;
        return $this;
    }

    /**
     * @return UserDocuments
     */
    public function getUserDocuments(): ?UserDocuments
    {
        return $this->userDocuments;
    }

    /**
     * @param UserDocuments $userDocuments
     * @return User
     */
    public function setUserDocuments(UserDocuments $userDocuments): User
    {
        $this->userDocuments = $userDocuments;
        return $this;
    }

    /**
     * @return UserEducation
     */
    public function getUserEducation(): ?UserEducation
    {
        return $this->userEducation;
    }

    /**
     * @param UserEducation $userEducation
     * @return User
     */
    public function setUserEducation(UserEducation $userEducation): User
    {
        $this->userEducation = $userEducation;
        return $this;
    }

    /**
     * @return UserAddress
     */
    public function getUserAddress(): ?UserAddress
    {
        return $this->userAddress;
    }

    /**
     * @param UserAddress $userAddress
     * @return User
     */
    public function setUserAddress(UserAddress $userAddress): User
    {
        $this->userAddress = $userAddress;
        return $this;
    }

    /**
     * @return UserPhone
     */
    public function getUserPhone(): ?UserPhone
    {
        return $this->userPhone;
    }

    /**
     * @param UserPhone $userPhone
     * @return User
     */
    public function setUserPhone(UserPhone $userPhone): User
    {
        $this->userPhone = $userPhone;
        return $this;
    }

    /**
     * @return UserSpecial
     */
    public function getUserSpecial(): ?UserSpecial
    {
        return $this->userSpecial;
    }

    /**
     * @param UserSpecial $userSpecial
     * @return User
     */
    public function setUserSpecial(UserSpecial $userSpecial): User
    {
        $this->userSpecial = $userSpecial;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAccountComplete(): ?bool
    {
        return $this->accountComplete;
    }

    /**
     * @param bool $accountComplete
     * @return User
     */
    public function setAccountComplete(bool $accountComplete): User
    {
        $this->accountComplete = $accountComplete;
        return $this;
    }
}