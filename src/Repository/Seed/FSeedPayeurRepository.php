<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedPayeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedPayeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedPayeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedPayeur[]    findAll()
 * @method FSeedPayeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedPayeurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedPayeur::class);
    }

    // /**
    //  * @return FSeedPayeur[] Returns an array of FSeedPayeur objects
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
    public function findOneBySomeField($value): ?FSeedPayeur
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
