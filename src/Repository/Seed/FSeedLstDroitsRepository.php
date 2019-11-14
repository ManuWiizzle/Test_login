<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedLstDroits;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedLstDroits|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedLstDroits|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedLstDroits[]    findAll()
 * @method FSeedLstDroits[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedLstDroitsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedLstDroits::class);
    }

    // /**
    //  * @return FSeedLstDroits[] Returns an array of FSeedLstDroits objects
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
    public function findOneBySomeField($value): ?FSeedLstDroits
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
