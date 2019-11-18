<?php

namespace App\Services;


use App\Entity\Seed\FSeedUser;
use App\Entity\Seed\FSeedClient;
use App\Entity\Seed\FSeedPayeur;
use App\Entity\Seed\FSeedProfil;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\Seed\FSeedUserRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\Seed\FSeedClientRepository;
use App\Repository\Seed\FSeedPayeurRepository;
use App\Repository\Seed\FSeedProfilRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class LoginInit

{

    /**
     * @var FSeedClientRepository
     * @var FSeedUserRepository
     * @var FSeedPayeurRepository
     * @var FSeedProfilRepository
     * @var EntityManager
     */

    private $FSeedClientRepository;
    private $FSeedUserRepository;
    private $FSeedPayeurRepository;
    private $FSeedProfilRepository;
    protected $em;
    private $session;

    public function __construct(FSeedClientRepository $FSeedClientRepository,
                                FSeedUserRepository $FSeedUserRepository,
                                FSeedPayeurRepository $FSeedPayeurRepository,
                                FSeedProfilRepository $FSeedProfilRepository,
                                EntityManagerInterface $entityManager,
                                SessionInterface $session)
    {
        $this->FSeedClientRepository = $FSeedClientRepository;
        $this->FSeedUserRepository = $FSeedUserRepository;
        $this->FSeedPayeurRepository = $FSeedPayeurRepository;
        $this->FSeedProfilRepository = $FSeedProfilRepository;
        $this->em = $entityManager;
        $this->session = $session;
    }


    public function userIni()
    {
        // On recherche un payeur qui à pour nom VISUEL DEV

        $payeur = $this->FSeedPayeurRepository->findBy(['nom' => 'VISUEL DEV']);

        if ($payeur == null) {
            $payeur = new FSeedPayeur;

            $payeur->setNom('VISUEL DEV');
            $payeur->setSiret("83897409500013");
            //Ajout du payeur en BDD
            $this->em->persist($payeur);
            $this->em->flush();
        }

        // On recherche un client qui à pour nom VISUEL DEV
        $client = $this->FSeedClientRepository->findBy(['nom' => 'VISUEL DEV']);

        if ($client == null) {
            $payeur = $this->em->getRepository(FSeedPayeur::class)->find($payeur[0]->getIdPayeur());
            $client = new FSeedClient;
            $client->setNom('VISUEL DEV');
            $client->setAlias('VDEV');
            $client->setSiret('8389740950001');
            $client->setIdPayeur($payeur);

            //Ajout du client en BDD
            $this->em->persist($client);
            $this->em->flush();
        }

        // On recherche un profil qui à pour nom VISUEL DEV
        $profil = $this->FSeedProfilRepository->findBy(['nom' => 'VISUEL DEV']);
        if ($profil == null) {
            $profil = new FSeedProfil;

            $profil->setIdClient($client->getIdClient());
            $profil->setNom('VISUEL DEV');
            //Ajout du profil en BDD
            $this->em->persist($profil);
            $this->em->flush();
        }
    }

    public function userConnexion(string $alias): bool
    {
        // On recherche un client par l'alias
        $client = $this->FSeedClientRepository->findBy(['alias' => $alias]);

        $message = "";
        $available = true;
        if ($client == null) {
            if ($alias == "VDEV") {
                // On utilise la fonction userIni()
                if ($this->userIni() == null) {
                    $this->session->addFlash('notice', 'Alias client incorrecte');

                    $available =  false;
                }
            } else {
                $this->session->addFlash('notice', 'Alias client incorrecte');

                $available = false;
            }

        }
        return $available;
    }
}

