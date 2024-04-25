<?php

namespace App\Repository;

use App\Entity\Tratamiento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tratamiento>
 *
 * @method Tratamiento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tratamiento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tratamiento[]    findAll()
 * @method Tratamiento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TratamientoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tratamiento::class);
    }


    /**
    * @return Tratamiento[] Returns an array of Tratamiento objects
    */
  public function findByType(): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.nombre = :val')
            ->setParameter('val', 'castrar')
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Tratamiento[] Returns an array of Tratamiento objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tratamiento
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
