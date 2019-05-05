<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserDocuments
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="user_documents")
 */
class UserDocuments
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="document_type", type="string")
     */
    private $documentType;

    /**
     * @var string
     * @ORM\Column(name="document_id_number", type="string")
     */
    private $documentIdNumber;

    /**
     * @var string
     * @ORM\Column(name="series", type="string")
     */
    private $documentSeries;

    /**
     * @var integer
     * @ORM\Column(name="document_number", type="integer")
     */
    private $documentNumber;

    /**
     * @var \DateTime
     * @ORM\Column(name="document_date", type="datetime")
     */
    private $documentDate;

    /**
     * @var string
     * @ORM\Column(name="document_who_got", type="string")
     */
    private $documentWhoGot;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return UserDocuments
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    /**
     * @param string $documentType
     * @return UserDocuments
     */
    public function setDocumentType(string $documentType): UserDocuments
    {
        $this->documentType = $documentType;
        return $this;
    }



    /**
     * @return string
     */
    public function getDocumentIdNumber(): ?string
    {
        return $this->documentIdNumber;
    }

    /**
     * @param string $documentIdNumber
     * @return UserDocuments
     */
    public function setDocumentIdNumber(string $documentIdNumber): UserDocuments
    {
        $this->documentIdNumber = $documentIdNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentSeries(): ?string
    {
        return $this->documentSeries;
    }

    /**
     * @param string $documentSeries
     * @return UserDocuments
     */
    public function setDocumentSeries(string $documentSeries): UserDocuments
    {
        $this->documentSeries = $documentSeries;
        return $this;
    }


    /**
     * @return int
     */
    public function getDocumentNumber(): ?int
    {
        return $this->documentNumber;
    }

    /**
     * @param int $documentNumber
     * @return UserDocuments
     */
    public function setDocumentNumber(int $documentNumber): UserDocuments
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDocumentDate(): ?\DateTime
    {
        return $this->documentDate;
    }

    /**
     * @param \DateTime $documentDate
     * @return UserDocuments
     */
    public function setDocumentDate(\DateTime $documentDate): UserDocuments
    {
        $this->documentDate = $documentDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentWhoGot(): ?string
    {
        return $this->documentWhoGot;
    }

    /**
     * @param string $documentWhoGot
     * @return UserDocuments
     */
    public function setDocumentWhoGot(string $documentWhoGot): UserDocuments
    {
        $this->documentWhoGot = $documentWhoGot;
        return $this;
    }
}