<?php

namespace App\Repository;

use App\Entity\Mascota;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Mascota>
 *
 * @method Mascota|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mascota|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mascota[]    findAll()
 * @method Mascota[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MascotaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mascota::class);
    }

  /**
     * @return Mascota[] Returns an array of Mascota objects order by edad
     */
    public function mascotaOrderEdad(): array
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.edad', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Mascota[] Returns an array of Mascota objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Mascota
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
