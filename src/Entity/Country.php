<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Cost;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=90)
     */
    private string $name;

    /**
     * @ORM\OneToMany(targetEntity=University::class, mappedBy="country", orphanRemoval=true)
     */
    private Collection $universities;

    /**
     * @ORM\OneToOne(targetEntity=Cost::class, mappedBy="country", cascade={"persist", "remove"})
     */
    private ?Cost $cost;

    /**
     * @ORM\OneToOne(targetEntity=Live::class, mappedBy="country", cascade={"persist", "remove"})
     */
    private ?Live $live;

    /**
     * @ORM\Column(type="float")
     */
    private float $latitude;

    /**
     * @ORM\Column(type="float")
     */
    private float $longitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $image;

    /**
     * @ORM\OneToOne(targetEntity=Opinion::class, mappedBy="country")
     */
    private ?Opinion $opinions;


    public function __construct()
    {
        $this->universities = new ArrayCollection();
        $this->opinions = new ArrayCollection();
    }

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

    /**
     * @return Collection|University[]
     */
    public function getUniversities(): Collection
    {
        return $this->universities;
    }

    public function addUniversity(University $university): self
    {
        if (!$this->universities->contains($university)) {
            $this->universities[] = $university;
            $university->setCountry($this);
        }

        return $this;
    }

    public function removeUniversity(University $university): self
    {
        if ($this->universities->removeElement($university)) {
            // set the owning side to null (unless already changed)
            if ($university->getCountry() === $this) {
                $university->setCountry(null);
            }
        }

        return $this;
    }

    public function getCost(): ?Cost
    {
        return $this->cost;
    }

    public function setCost(?Cost $cost): self
    {
        $this->cost = $cost;

        // set (or unset) the owning side of the relation if necessary
        if ($cost !== null and $cost->getCountry() !== $this) {
            $cost->setCountry($this);
        }

        return $this;
    }

    public function getLive(): ?Live
    {
        return $this->live;
    }

    public function setLive(?Live $live): self
    {
        $this->live = $live;

        // set (or unset) the owning side of the relation if necessary
        if ($live !== null and $live->getCountry() !== $this) {
            $live->setCountry($this);
        }

        return $this;
    }

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getOpinions(): ?Opinion
    {
        return $this->opinions;
    }

    /*public function addOpinion(Opinion $opinion): self
    {
        if (!$this->opinions->contains($opinion)) {
            $this->opinions[] = $opinion;
            $opinion->setCountry($this);
        }

        return $this;
    }

    public function removeOpinion(Opinion $opinion): self
    {
        if ($this->opinions->removeElement($opinion)) {
            // set the owning side to null (unless already changed)
            if ($opinion->getCountry() === $this) {
                $opinion->setCountry(null);
            }
        }

        return $this;
    }*/
}
