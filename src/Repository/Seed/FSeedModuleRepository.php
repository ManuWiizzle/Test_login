<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedModule[]    findAll()
 * @method FSeedModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedModuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedModule::class);
    }

    // /**
    //  * @return FSeedModule[] Returns an array of FSeedModule objects
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
    public function findOneBySomeField($value): ?FSeedModule
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
