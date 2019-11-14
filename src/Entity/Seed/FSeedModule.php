<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedModule
 *
 * @ORM\Table(name="f_seed_module", indexes={@ORM\Index(name="WDIDX_F_SEED_MODULE_CLE_NOM_VERSION", columns={"NOM", "VERSION"}), @ORM\Index(name="WDIDX_F_SEED_MODULE_NOM", columns={"NOM"})})
 * @ORM\Entity
 */
class FSeedModule
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VERSION", type="string", length=5, nullable=true)
     */
    private $version;

    public function getIdModule(): ?int
    {
        return $this->idModule;
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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }


}
