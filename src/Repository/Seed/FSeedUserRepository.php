<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedUser[]    findAll()
 * @method FSeedUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedUser::class);
    }

    // /**
    //  * @return FSeedUser[] Returns an array of FSeedUser objects
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
    public function findOneBySomeField($value): ?FSeedUser
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
