<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedLstModPro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedLstModPro|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedLstModPro|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedLstModPro[]    findAll()
 * @method FSeedLstModPro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedLstModProRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedLstModPro::class);
    }

    // /**
    //  * @return FSeedLstModPro[] Returns an array of FSeedLstModPro objects
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
    public function findOneBySomeField($value): ?FSeedLstModPro
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
