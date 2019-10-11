<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedLstModCli
 *
 * @ORM\Table(name="f_seed_lst_mod_cli", indexes={@ORM\Index(name="WDIDX_F_SEED_LST_MOD_CLI_ID_CLIENT", columns={"ID_CLIENT"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_CLI_ID_MODULE", columns={"ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_LST_MOD_CLI_CLE_CLI_MOD", columns={"ID_CLIENT", "ID_MODULE"})})
 * @ORM\Entity
 */
class FSeedLstModCli
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_lst_mod_cli", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLstModCli;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_MODULE", type="bigint", nullable=false)
     */
    private $idModule = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ID_CLIENT", type="bigint", nullable=false)
     */
    private $idClient = '0';

    public function getIdLstModCli(): ?string
    {
        return $this->idLstModCli;
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
