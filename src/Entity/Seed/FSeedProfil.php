<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedProfil
 *
 * @ORM\Table(name="f_seed_profil", indexes={@ORM\Index(name="WDIDX_F_SEED_PROFIL_NOM", columns={"NOM"}), @ORM\Index(name="WDIDX_F_SEED_PROFIL_ID_CLIENT", columns={"ID_CLIENT"}), @ORM\Index(name="WDIDX_F_SEED_PROFIL_CLE_CLI_NOM", columns={"ID_CLIENT", "NOM"})})
 * @ORM\Entity
 */
class FSeedProfil
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_PROFIL", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProfil;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_CLIENT", type="integer", nullable=true)
     */
    private $idClient = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="EST_DEFAUT", type="boolean", nullable=true)
     */
    private $estDefaut = '0';

    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

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

    public function getEstDefaut(): ?bool
    {
        return $this->estDefaut;
    }

    public function setEstDefaut(?bool $estDefaut): self
    {
        $this->estDefaut = $estDefaut;

        return $this;
    }


}
