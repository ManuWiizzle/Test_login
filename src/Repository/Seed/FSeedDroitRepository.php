<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedDroit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedDroit|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedDroit|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedDroit[]    findAll()
 * @method FSeedDroit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedDroitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedDroit::class);
    }

    // /**
    //  * @return FSeedDroit[] Returns an array of FSeedDroit objects
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
    public function findOneBySomeField($value): ?FSeedDroit
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
