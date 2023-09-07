<?php

namespace App\Entity;

use App\Repository\CitiesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitiesRepository::class)]
class Cities
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $CityName = null;

    #[ORM\Column(length: 255)]
    private ?string $Rewrite = null;

    #[ORM\Column]
    private ?bool $IsActive = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCityName(): ?string
    {
        return $this->CityName;
    }

    public function setCityName(string $CityName): static
    {
        $this->CityName = $CityName;

        return $this;
    }

    public function getRewrite(): ?string
    {
        return $this->Rewrite;
    }

    public function setRewrite(string $Rewrite): static
    {
        $this->Rewrite = $Rewrite;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->IsActive;
    }

    public function setIsActive(bool $IsActive): static
    {
        $this->IsActive = $IsActive;

        return $this;
    }
}
