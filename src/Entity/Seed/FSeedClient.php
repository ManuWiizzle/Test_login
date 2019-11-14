<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedClient
 *
 * @ORM\Table(name="f_seed_client", uniqueConstraints={@ORM\UniqueConstraint(name="ALIAS", columns={"ALIAS"}), @ORM\UniqueConstraint(name="NOM", columns={"NOM"})}, indexes={@ORM\Index(name="WDIDX_F_SEED_CLIENT_ID_PAYEUR", columns={"ID_PAYEUR"})})
 * @ORM\Entity(repositoryClass="App\Repository\Seed\FSeedClientRepository")
 */
class FSeedClient
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_CLIENT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

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
     * @var string|null
     *
     * @ORM\Column(name="ALIAS", type="string", length=5, nullable=true)
     */
    private $alias;

    /**
     * @var \FSeedPayeur
     *
     * @ORM\ManyToOne(targetEntity="FSeedPayeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_PAYEUR", referencedColumnName="ID_PAYEUR")
     * })
     */
    private $idPayeur;

    public function getIdClient(): ?int
    {
        return $this->idClient;
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

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getIdPayeur(): ?FSeedPayeur
    {
        return $this->idPayeur;
    }

    public function setIdPayeur(?FSeedPayeur $idPayeur): self
    {
        $this->idPayeur = $idPayeur;

        return $this;
    }


}
