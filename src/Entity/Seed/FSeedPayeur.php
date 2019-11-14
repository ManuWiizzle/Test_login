<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedPayeur
 *
 * @ORM\Table(name="f_seed_payeur", uniqueConstraints={@ORM\UniqueConstraint(name="NOM", columns={"NOM"})})
 * @ORM\Entity(repositoryClass="App\Repository\Seed\FSeedPayeurRepository")
 */
class FSeedPayeur
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_PAYEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPayeur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SIRET", type="string", length=14, nullable=true)
     */
    private $siret;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $nom;

    public function getIdPayeur(): ?int
    {
        return $this->idPayeur;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


}
