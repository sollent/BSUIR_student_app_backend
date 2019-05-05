<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserEducation
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_education")
 */
class UserEducation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="place_education", type="string")
     */
    private $placeEducation;

    /**
     * @var string
     * @ORM\Column(name="education_document_type", type="string")
     */
    private $educationDocumentType;

    /**
     * @var string
     * @ORM\Column(name="school_number", type="string")
     */
    private $schoolNumber;

    /**
     * @var string
     * @ORM\Column(name="document_number", type="string")
     */
    private $documentNumber;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_of_end_education", type="datetime")
     */
    private $dateOfEndEducation;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserEducation
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlaceEducation(): ?string
    {
        return $this->placeEducation;
    }

    /**
     * @param string $placeEducation
     * @return UserEducation
     */
    public function setPlaceEducation(string $placeEducation): UserEducation
    {
        $this->placeEducation = $placeEducation;
        return $this;
    }

    /**
     * @return string
     */
    public function getEducationDocumentType(): ?string
    {
        return $this->educationDocumentType;
    }

    /**
     * @param string $educationDocumentType
     * @return UserEducation
     */
    public function setEducationDocumentType(string $educationDocumentType): UserEducation
    {
        $this->educationDocumentType = $educationDocumentType;
        return $this;
    }



    /**
     * @return string
     */
    public function getSchoolNumber(): ?string
    {
        return $this->schoolNumber;
    }

    /**
     * @param string $schoolNumber
     * @return UserEducation
     */
    public function setSchoolNumber(string $schoolNumber): UserEducation
    {
        $this->schoolNumber = $schoolNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    /**
     * @param string $documentNumber
     * @return UserEducation
     */
    public function setDocumentNumber(string $documentNumber): UserEducation
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfEndEducation(): ?\DateTime
    {
        return $this->dateOfEndEducation;
    }

    /**
     * @param \DateTime $dateOfEndEducation
     * @return UserEducation
     */
    public function setDateOfEndEducation(\DateTime $dateOfEndEducation): UserEducation
    {
        $this->dateOfEndEducation = $dateOfEndEducation;
        return $this;
    }

}
