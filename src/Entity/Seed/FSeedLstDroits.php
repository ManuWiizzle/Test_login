<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstDroits
 *
 * @ORM\Table(name="f_seed_lst_droits", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_DROITS_ID_ROLE", columns={"ID_ROLE"}), @ORM\Index(name="WDIDX_F_SEED_LST_DROITS_CLE_ROLE_DROIT", columns={"ID_ROLE", "ID_DROIT"}), @ORM\Index(name="WDIDX_F_SEED_LST_DROITS_ID_DROIT", columns={"ID_DROIT"})})
 * @ORM\Entity(repositoryClass="App\Repository\Seed\FSeedLstDroitsRepository")
 */
class FSeedLstDroits
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_droits", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModDroits;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_DROIT", type="integer", nullable=false)
     */
    private $idDroit;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ROLE", type="integer", nullable=false)
     */
    private $idRole;

    public function getIdLstModDroits(): ?int
    {
        return $this->idLstModDroits;
    }

    public function getIdDroit(): ?int
    {
        return $this->idDroit;
    }

    public function setIdDroit(int $idDroit): self
    {
        $this->idDroit = $idDroit;

        return $this;
    }

    public function getIdRole(): ?int
    {
        return $this->idRole;
    }

    public function setIdRole(int $idRole): self
    {
        $this->idRole = $idRole;

        return $this;
    }


}
