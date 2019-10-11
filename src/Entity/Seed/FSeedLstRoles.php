<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstRoles
 *
 * @ORM\Table(name="f_seed_lst_roles", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_ROLES_ID_ROLE", columns={"ID_ROLE"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_CLE_MOD_USER", columns={"ID_MODULE", "ID_USER"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_CLE_ROLE_USER", columns={"ID_ROLE", "ID_USER"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_ID_MODULE", columns={"ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_ROLES_ID_USER", columns={"ID_USER"})})
 * @ORM\Entity
 */
class FSeedLstRoles
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_roles", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModRoles;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="bigint", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_ROLE", type="bigint", nullable=false)
     */
    private $idRole;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="bigint", nullable=false)
     */
    private $idModule = '0';

    public function getIdLstModRoles(): ?string
    {
        return $this->idLstModRoles;
    }

    public function getIdUser(): ?string
    {
        return $this->idUser;
    }

    public function setIdUser(string $idUser): self
    {
        $this->idUser = $idUser;

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

    public function getIdModule(): ?string
    {
        return $this->idModule;
    }

    public function setIdModule(string $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }


}
