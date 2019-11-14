<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstModPro
 *
 * @ORM\Table(name="f_seed_lst_mod_pro", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_ID_PROFIL", columns={"ID_PROFIL"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_CLE_CLI_PRO_MOD", columns={"ID_CLIENT", "ID_PROFIL", "ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_CLE_CLI_MOD", columns={"ID_CLIENT", "ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_ID_MODULE", columns={"ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_PRO_ID_CLIENT", columns={"ID_CLIENT"})})
 * @ORM\Entity(repositoryClass="App\Repository\Seed\FSeedLstModProRepository")
 */
class FSeedLstModPro
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_pro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModPro;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="integer", nullable=false)
     */
    private $idModule;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_PROFIL", type="integer", nullable=false)
     */
    private $idProfil;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CLIENT", type="integer", nullable=false)
     */
    private $idClient;

    public function getIdLstModPro(): ?int
    {
        return $this->idLstModPro;
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

    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }

    public function setIdProfil(int $idProfil): self
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
