<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1000)]
    private ?string $Rewrite = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Source = null;

    #[ORM\Column(length: 1000)]
    private ?string $ImagePath = null;

    #[ORM\Column]
    private ?bool $IsActive = null;

    #[ORM\Column]
    private ?bool $IsBanner = null;

    #[ORM\Column(length: 500)]
    private ?string $ShortDescription = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $CreateDate = null;

    #[ORM\Column]
    private ?int $ReadCount = null;

    #[ORM\Column]
    private ?int $cityId = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->Source;
    }

    public function setSource(string $Source): static
    {
        $this->Source = $Source;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->ImagePath;
    }

    public function setImagePath(string $ImagePath): static
    {
        $this->ImagePath = $ImagePath;

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

    public function isIsBanner(): ?bool
    {
        return $this->IsBanner;
    }

    public function setIsBanner(bool $IsBanner): static
    {
        $this->IsBanner = $IsBanner;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->ShortDescription;
    }

    public function setShortDescription(string $ShortDescription): static
    {
        $this->ShortDescription = $ShortDescription;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->CreateDate;
    }

    public function setCreateDate(\DateTimeInterface $CreateDate): static
    {
        $this->CreateDate = $CreateDate;

        return $this;
    }

    public function getReadCount(): ?int
    {
        return $this->ReadCount;
    }

    public function setReadCount(int $ReadCount): static
    {
        $this->ReadCount = $ReadCount;

        return $this;
    }

    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    public function setCityId(int $cityId): static
    {
        $this->cityId = $cityId;

        return $this;
    }
}
