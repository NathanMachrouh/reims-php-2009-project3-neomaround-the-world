<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CostRepository;

/**
 * @ORM\Entity(repositoryClass=CostRepository::class)
 */
class Cost
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $food;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $transport;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $accomodation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private string $extra;

    /**
     * @ORM\OneToOne(targetEntity=Country::class, inversedBy="cost", cascade={"persist", "remove"})
     */
    private ?Country $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFood(): ?string
    {
        return $this->food;
    }

    public function setFood(string $food): self
    {
        $this->food = $food;

        return $this;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function setTransport(string $transport): self
    {
        $this->transport = $transport;

        return $this;
    }

    public function getAccomodation(): ?string
    {
        return $this->accomodation;
    }

    public function setAccomodation(string $accomodation): self
    {
        $this->accomodation = $accomodation;

        return $this;
    }

    public function getExtra(): ?string
    {
        return $this->extra;
    }

    public function setExtra(string $extra): self
    {
        $this->extra = $extra;

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
