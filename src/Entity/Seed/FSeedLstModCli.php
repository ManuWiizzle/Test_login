<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstModCli
 *
 * @ORM\Table(name="f_seed_lst_mod_cli", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_MOD_CLI_ID_CLIENT", columns={"ID_CLIENT"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_CLI_ID_MODULE", columns={"ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_CLI_CLE_CLI_MOD", columns={"ID_CLIENT", "ID_MODULE"})})
 * @ORM\Entity(repositoryClass="App\Repository\Seed\FSeedLstModCliRepository")
 */
class FSeedLstModCli
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_cli", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModCli;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="integer", nullable=false)
     */
    private $idModule;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CLIENT", type="integer", nullable=false)
     */
    private $idClient;

    public function getIdLstModCli(): ?int
    {
        return $this->idLstModCli;
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
