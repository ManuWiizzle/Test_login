<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedProfil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedProfil|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedProfil|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedProfil[]    findAll()
 * @method FSeedProfil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedProfilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedProfil::class);
    }

    // /**
    //  * @return FSeedProfil[] Returns an array of FSeedProfil objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FSeedProfil
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
