<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\FruitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FruitsRepository::class)]
#[ApiResource]
class Fruits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $Prix = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Details = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?string
    {
        return $this->Prix;
    }

    public function setPrix(string $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->Details;
    }

    public function setDetails(string $Details): self
    {
        $this->Details = $Details;

        return $this;
    }
}
