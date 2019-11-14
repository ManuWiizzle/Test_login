<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstRoles
 *
 * @ORM\Table(name="f_seed_lst_roles", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_ROLES_ID_ROLE", columns={"ID_ROLE"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_CLE_MOD_USER", columns={"ID_MODULE", "ID_USER"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_CLE_ROLE_USER", columns={"ID_ROLE", "ID_USER"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_ID_USER", columns={"ID_USER"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_ID_MODULE", columns={"ID_MODULE"})})
 * @ORM\Entity
 */
class FSeedLstRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_roles", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModRoles;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ROLE", type="integer", nullable=false)
     */
    private $idRole;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="integer", nullable=false)
     */
    private $idModule;

    public function getIdLstModRoles(): ?int
    {
        return $this->idLstModRoles;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

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

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function setIdModule(int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }


}
