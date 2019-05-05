<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserSpecial
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_special")
 */
class UserSpecial
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="department_name", type="string")
     */
    private $departmentName;

    /**
     * @var Special
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Special")
     * @ORM\JoinColumn(name="special_id", referencedColumnName="id", unique=false)
     */
    private $special;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserSpecial
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartmentName(): ?string
    {
        return $this->departmentName;
    }

    /**
     * @param string $departmentName
     * @return UserSpecial
     */
    public function setDepartmentName(string $departmentName): UserSpecial
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return Special
     */
    public function getSpecial(): ?Special
    {
        return $this->special;
    }

    /**
     * @param Special $special
     * @return UserSpecial
     */
    public function setSpecial(Special $special): UserSpecial
    {
        $this->special = $special;
        return $this;
    }
}