<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedRole[]    findAll()
 * @method FSeedRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedRole::class);
    }

    // /**
    //  * @return FSeedRole[] Returns an array of FSeedRole objects
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
    public function findOneBySomeField($value): ?FSeedRole
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
