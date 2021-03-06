<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedClient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedClient|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedClient|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedClient[]    findAll()
 * @method FSeedClient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedClientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedClient::class);
    }

    // /**
    //  * @return FSeedClient[] Returns an array of FSeedClient objects
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
    public function findOneBySomeField($value): ?FSeedClient
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
