<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="text")
     */
    private string $Cost;

    /**
     * @ORM\Column(type="text")
     */
    private string $live;

    /**
     * @ORM\Column(type="text")
     */
    private string $opinion;

    public function __construct()
    {
        $this->universities = new ArrayCollection();
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

    public function getCost(): ?string
    {
        return $this->Cost;
    }

    public function setCost(string $Cost): self
    {
        $this->Cost = $Cost;

        return $this;
    }

    public function getLive(): ?string
    {
        return $this->live;
    }

    public function setLive(string $live): self
    {
        $this->live = $live;

        return $this;
    }

    public function getOpinion(): ?string
    {
        return $this->opinion;
    }

    public function setOpinion(string $opinion): self
    {
        $this->opinion = $opinion;

        return $this;
    }
}
