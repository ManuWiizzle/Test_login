<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedPayeur
 *
 * @ORM\Table(name="f_seed_payeur", uniqueConstraints={@ORM\UniqueConstraint(name="NOM", columns={"NOM"})})
 * @ORM\Entity
 */
class FSeedPayeur
{
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

    /**
     * @var \FSeedClient
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="FSeedClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAYEUR", referencedColumnName="ID_PAYEUR")
     * })
     */
    private $idPayeur;

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

    public function getIdPayeur(): ?FSeedClient
    {
        return $this->idPayeur;
    }

    public function setIdPayeur(?FSeedClient $idPayeur): self
    {
        $this->idPayeur = $idPayeur;

        return $this;
    }


}
