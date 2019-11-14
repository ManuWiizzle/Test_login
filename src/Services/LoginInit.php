<?php

namespace App\Services;



use App\Entity\Seed\FSeedUser;
use App\Entity\Seed\FSeedClient;
use App\Entity\Seed\FSeedPayeur;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\Seed\FSeedUserRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\Seed\FSeedClientRepository;
use App\Repository\Seed\FSeedPayeurRepository;
use App\Repository\Seed\FSeedProfilRepository;


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

 public function __construct(FSeedClientRepository $FSeedClientRepository,
  FSeedUserRepository $FSeedUserRepository, 
  FSeedPayeurRepository $FSeedPayeurRepository,
  FSeedProfilRepository $FSeedProfilRepository, 
  EntityManagerInterface $entityManager)
 {
    $this->FSeedClientRepository = $FSeedClientRepository;
    $this->FSeedUserRepository = $FSeedUserRepository;
    $this->FSeedPayeurRepository = $FSeedPayeurRepository;
    $this->FSeedProfilRepository = $FSeedProfilRepository;
    $this->em = $entityManager;
 }



  public function userIni()
  {
    // On recherche un payeur qui à pour nom VISUEL DEV
    
    $payeur = $this->FSeedPayeurRepository->findBy(['nom' => 'VISUEL DEV']);
    
      if ($payeur == null)
      {
        $payeur = new FSeedPayeur;
        
        $payeur->setNom('VISUEL DEV');
        $payeur->setSiret("83897409500013");
        //Ajout du payeur en BDD
        $bdd = $this->em->persist($payeur);
        $bdd = $this->em->flush();

      }

    // On recherche un client qui à pour nom VISUEL DEV  
    $client = $this->FSeedClientRepository->findBy(['nom' => 'VISUEL DEV']);
    
      if ($client == null)
      {
        $client = new FSeedClient;
        
        $client->setIdPayeur($payeur->getIdPayeur());
         
        $client->setNom('VISUEL DEV');
        $client->setAlias('VDEV');
        $client->setSiret('8389740950001');
         //Ajout du payeur en BDD
         $bdd = $this->em->persist($client);
         $bdd = $this->em->flush();
      }

    // On recherche un profil qui à pour nom VISUEL DEV
    $profil= $this->FSeedProfilRepository->findBy(['nom' => 'VISUEL DEV']);
      if($profil == null)
      {
        $profil = new FSeedProfil;
        $profil->setIdClient($client->getIdClient());
        $profil->setNom('VISUEL DEV');
        //Ajout du payeur en BDD
        $bdd = $this->em->persist($profil);
        $bdd = $this->em->flush();
      }
  }

  public function userConnexion(string $alias) : bool
  {
    // On recherche un client par l'alias
    $client = $this->FSeedClientRepository->findBy(['alias' => $alias]);
    
    $message="";
   
    if($client == null)
    {
        if($alias == "VDEV")
        {
          // On utilise la fonction userIni()
          if ($this->userIni() == null)
          {
            $message .= "Alias client incorrecte";
            
            return false;
          } 
        }
        else
        {
          $message .= "Alias client incorrecte";
          return false;
        }
    }
     
  }
      

}

