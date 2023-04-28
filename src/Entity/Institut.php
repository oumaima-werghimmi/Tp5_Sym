<?php

namespace App\Entity;

use App\Repository\InstitutRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstitutRepository::class)]
class Institut
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $institut_id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomI = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInstitutId(): ?int
    {
        return $this->institut_id;
    }

    public function setInstitutId(?int $institut_id): self
    {
        $this->institut_id = $institut_id;

        return $this;
    }

    public function getNomI(): ?string
    {
        return $this->nomI;
    }

    public function setNomI(string $nomI): self
    {
        $this->nomI = $nomI;

        return $this;
    }
}
