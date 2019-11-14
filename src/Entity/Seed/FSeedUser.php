<?php

namespace App\Entity\Seed;

use Doctrine\ORM\Mapping as ORM;

/**
 * FSeedUser
 *
 * @ORM\Table(name="f_seed_user", uniqueConstraints={@ORM\UniqueConstraint(name="LOGIN", columns={"LOGIN"})}, indexes={@ORM\Index(name="WDIDX_F_SEED_USER_ID_PROFIL", columns={"ID_PROFIL"})})
 * @ORM\Entity
 */
class FSeedUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_PROFIL", type="integer", nullable=false)
     */
    private $idProfil;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN", type="string", length=255, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="NOM", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOM", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="MDP", type="string", length=80, nullable=false, options={"fixed"=true})
     */
    private $mdp;

    /**
     * @var bool
     *
     * @ORM\Column(name="EST_ADMIN", type="boolean", nullable=false)
     */
    private $estAdmin;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEPHONE", type="string", length=50, nullable=false)
     */
    private $telephone;

    /**
     * @var bool
     *
     * @ORM\Column(name="EST_SUPER", type="boolean", nullable=false)
     */
    private $estSuper;

    /**
     * @var string
     *
     * @ORM\Column(name="EMAIL", type="string", length=320, nullable=false)
     */
    private $email;

    /**
     * @var bool
     *
     * @ORM\Column(name="EST_ACTIVE", type="boolean", nullable=false)
     */
    private $estActive;

    /**
     * @var string
     *
     * @ORM\Column(name="MDP_SERVEUR", type="string", length=80, nullable=false, options={"fixed"=true})
     */
    private $mdpServeur;

    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }

    public function setIdProfil(int $idProfil): self
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getEstAdmin(): ?bool
    {
        return $this->estAdmin;
    }

    public function setEstAdmin(bool $estAdmin): self
    {
        $this->estAdmin = $estAdmin;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEstSuper(): ?bool
    {
        return $this->estSuper;
    }

    public function setEstSuper(bool $estSuper): self
    {
        $this->estSuper = $estSuper;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEstActive(): ?bool
    {
        return $this->estActive;
    }

    public function setEstActive(bool $estActive): self
    {
        $this->estActive = $estActive;

        return $this;
    }

    public function getMdpServeur(): ?string
    {
        return $this->mdpServeur;
    }

    public function setMdpServeur(string $mdpServeur): self
    {
        $this->mdpServeur = $mdpServeur;

        return $this;
    }


}
