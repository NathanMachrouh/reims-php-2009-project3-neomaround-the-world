<?php

namespace App\Entity;

use App\Repository\UniversityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UniversityRepository::class)
 */
class University
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private string $image;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private string $street;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private string $city;

    /**
     * @ORM\Column(type="string", lenght=50)
     */
    private string $postalCode;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $referentMail;

    /**
     * @ORM\Column(type="text")
     */
    private string $description;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="universities")
     * @ORM\JoinColumn(nullable=false)
     */
    private Country $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getReferentMail(): ?string
    {
        return $this->referentMail;
    }

    public function setReferentMail(string $referentMail): self
    {
        $this->referentMail = $referentMail;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }
}
