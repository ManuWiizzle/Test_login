<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedLstRoles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedLstRoles|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedLstRoles|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedLstRoles[]    findAll()
 * @method FSeedLstRoles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedLstRolesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedLstRoles::class);
    }

    // /**
    //  * @return FSeedLstRoles[] Returns an array of FSeedLstRoles objects
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
    public function findOneBySomeField($value): ?FSeedLstRoles
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
