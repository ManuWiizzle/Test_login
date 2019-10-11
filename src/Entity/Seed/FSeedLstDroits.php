<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstDroits
 *
 * @ORM\Table(name="f_seed_lst_droits", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_DROITS_ID_ROLE", columns={"ID_ROLE"}), @ORM\Index(name="WDIDX_F_SEED_LST_DROITS_ID_DROIT", columns={"ID_DROIT"}), @ORM\Index(name="WDIDX_F_SEED_LST_DROITS_CLE_ROLE_DROIT", columns={"ID_ROLE", "ID_DROIT"})})
 * @ORM\Entity
 */
class FSeedLstDroits
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_droits", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModDroits;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_DROIT", type="bigint", nullable=false)
     */
    private $idDroit;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ROLE", type="bigint", nullable=false)
     */
    private $idRole;

    public function getIdLstModDroits(): ?string
    {
        return $this->idLstModDroits;
    }

    public function getIdDroit(): ?string
    {
        return $this->idDroit;
    }

    public function setIdDroit(string $idDroit): self
    {
        $this->idDroit = $idDroit;

        return $this;
    }

    public function getIdRole(): ?string
    {
        return $this->idRole;
    }

    public function setIdRole(string $idRole): self
    {
        $this->idRole = $idRole;

        return $this;
    }


}
