<?php

namespace App\Entity;

use App\Repository\LiveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LiveRepository::class)
 */
class Live
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private string $culture;

    /**
     * @ORM\Column(type="text")
     */
    private string $life;

    /**
     * @ORM\OneToOne(targetEntity=Country::class, inversedBy="live", cascade={"persist", "remove"})
     */
    private ?Country $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCulture(): ?string
    {
        return $this->culture;
    }

    public function setCulture(string $culture): self
    {
        $this->culture = $culture;

        return $this;
    }

    public function getLife(): ?string
    {
        return $this->life;
    }

    public function setLife(string $life): self
    {
        $this->life = $life;

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
