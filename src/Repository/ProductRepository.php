<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Mapping\OrderBy;
use Doctrine\Persistence\ManagerRegistry;



class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function findLatest(): array
    {
        // CrearQueryBuilder
        return $query = $this->createQueryBuilder('product')
            ->addSelect('comment ', 'tags')
            ->leftJoin('product.comment', 'comment')
            ->leftJoin('product.tags', 'tags')
            ->OrderBy('product.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findLast(): array
    {
        // CreateQuery
        $dql = 'SELECT p FROM App\Entity\Product p ORDER BY p.id DESC';
        $query = $this->getEntityManager()->createQuery($dql)->setMaxResults(12);
        // Nos muestra el sql de la consulta dql
        dd($query->getSQL());

        return $query->getResult();
    }

    public function findByTag($tag): array
    {
        // CrearQueryBuilder
        return $query = $this->createQueryBuilder('product')

            ->setParameter('tag', $tag)
            ->andWhere(':tag MEMBER OF product.tags ')
            ->addSelect('comment ', 'tags')
            ->leftJoin('product.comment', 'comment')
            ->leftJoin('product.tags', 'tags')
            ->OrderBy('product.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
