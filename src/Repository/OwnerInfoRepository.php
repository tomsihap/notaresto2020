<?php

namespace App\Repository;

use App\Entity\OwnerInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method OwnerInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method OwnerInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method OwnerInfo[]    findAll()
 * @method OwnerInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OwnerInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OwnerInfo::class);
    }

    // /**
    //  * @return OwnerInfo[] Returns an array of OwnerInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OwnerInfo
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
