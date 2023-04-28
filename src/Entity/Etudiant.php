<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
/**
      * @ORM\ManyToOne(targetEntity= "institut")
      * @ORM\JoinColumn(name="institut_id", referencedColumnName="id")
      */
    //   Private $instit ;



    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_e = null;

    #[ORM\Column(length: 255)]
    private ?string $instit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomE(): ?string
    {
        return $this->nom_e;
    }

    public function setNomE(string $nom_e): self
    {
        $this->nom_e = $nom_e;

        return $this;
    }
        /**
     * Get nome
     *
     * @return \gestscolBundle\Entity\institut
     */


    public function getInstit(): ?string
    {
        return $this->instit;
    }
  /**
     * Set instit
     *
     * @param test\gestscolBundle\Entity\institut $instit
     *
     * @return etudiant
     */

    public function setInstit(string $instit): self
    {
        $this->instit = $instit;

        return $this;
    }
}
