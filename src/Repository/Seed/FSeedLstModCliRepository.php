<?php

namespace App\Repository\Seed;

use App\Entity\Seed\FSeedLstModCli;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FSeedLstModCli|null find($id, $lockMode = null, $lockVersion = null)
 * @method FSeedLstModCli|null findOneBy(array $criteria, array $orderBy = null)
 * @method FSeedLstModCli[]    findAll()
 * @method FSeedLstModCli[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FSeedLstModCliRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FSeedLstModCli::class);
    }

    // /**
    //  * @return FSeedLstModCli[] Returns an array of FSeedLstModCli objects
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
    public function findOneBySomeField($value): ?FSeedLstModCli
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
