<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstModPro
 *
 * @ORM\Table(name="f_seed_lst_mod_pro", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_ID_PROFIL", columns={"ID_PROFIL"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_CLE_CLI_PRO_MOD", columns={"ID_CLIENT", "ID_PROFIL", "ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_ID_MODULE", columns={"ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_ID_CLIENT", columns={"ID_CLIENT"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_CLE_CLI_MOD", columns={"ID_CLIENT", "ID_MODULE"})})
 * @ORM\Entity
 */
class FSeedLstModPro
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_pro", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModPro;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="bigint", nullable=false)
     */
    private $idModule = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ID_PROFIL", type="bigint", nullable=false)
     */
    private $idProfil = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CLIENT", type="bigint", nullable=false)
     */
    private $idClient = '0';

    public function getIdLstModPro(): ?string
    {
        return $this->idLstModPro;
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

    public function getIdProfil(): ?string
    {
        return $this->idProfil;
    }

    public function setIdProfil(string $idProfil): self
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    public function getIdClient(): ?string
    {
        return $this->idClient;
    }

    public function setIdClient(string $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
