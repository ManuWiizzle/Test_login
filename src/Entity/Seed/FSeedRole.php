<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedRole
 *
 * @ORM\Table(name="f_seed_role", uniqueConstraints={@ORM\UniqueConstraint(name="NOM", columns={"NOM"})}, indexes={@ORM\Index(name="WDIDX_F_SEED_ROLE_ID_MODULE", columns={"ID_MODULE"}), @ORM\Index(name="WDIDX_F_SEED_ROLE_CLE_CLI_MOD_ROLE", columns={"ID_CLIENT", "ID_MODULE", "ID_ROLE"}), @ORM\Index(name="WDIDX_F_SEED_ROLE_CLE_CLI_NOM", columns={"ID_CLIENT", "NOM"}), @ORM\Index(name="WDIDX_F_SEED_ROLE_ID_CLIENT", columns={"ID_CLIENT"})})
 * @ORM\Entity(repositoryClass="App\Repository\Seed\FSeedRoleRepository")
 */
class FSeedRole
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ROLE", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOM", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_MODULE", type="integer", nullable=true)
     */
    private $idModule;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="EST_DEFAUT", type="boolean", nullable=true)
     */
    private $estDefaut = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ID_CLIENT", type="integer", nullable=true)
     */
    private $idClient = '0';

    public function getIdRole(): ?int
    {
        return $this->idRole;
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

    public function getIdModule(): ?int
    {
        return $this->idModule;
    }

    public function setIdModule(?int $idModule): self
    {
        $this->idModule = $idModule;

        return $this;
    }

    public function getEstDefaut(): ?bool
    {
        return $this->estDefaut;
    }

    public function setEstDefaut(?bool $estDefaut): self
    {
        $this->estDefaut = $estDefaut;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
