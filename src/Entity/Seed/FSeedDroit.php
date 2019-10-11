<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedDroit
 *
 * @ORM\Table(name="f_seed_droit", indexes={@ORM\Index(name="WDIDX_F_SEED_DROIT_NOM", columns={"NOM"}), @ORM\Index(name="WDIDX_F_SEED_DROIT_ID_MODULE", columns={"ID_MODULE"})})
 * @ORM\Entity
 */
class FSeedDroit
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_DROIT", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDroit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_MODULE", type="bigint", nullable=true)
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
     * @ORM\Column(name="DESCRIPTION", type="string", length=255, nullable=true)
     */
    private $description;

    public function getIdDroit(): ?string
    {
        return $this->idDroit;
    }

    public function getIdModule(): ?string
    {
        return $this->idModule;
    }

    public function setIdModule(?string $idModule): self
    {
        $this->idModule = $idModule;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}
