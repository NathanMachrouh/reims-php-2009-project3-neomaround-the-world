<?php

namespace App\Entity;

use App\Repository\OpinionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OpinionRepository::class)
 */
class Opinion
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
    private string $interview;

    /**
     * @ORM\Column(type="text")
     */
    private string $advice;

    /**
     * @ORM\OneToOne(targetEntity=Country::class, inversedBy="opinion", cascade={"persist", "remove"})
     */
    private ?Country $country;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInterview(): ?string
    {
        return $this->interview;
    }

    public function setInterview(string $interview): self
    {
        $this->interview = $interview;

        return $this;
    }

    public function getAdvice(): ?string
    {
        return $this->advice;
    }

    public function setAdvice(string $advice): self
    {
        $this->advice = $advice;

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

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
