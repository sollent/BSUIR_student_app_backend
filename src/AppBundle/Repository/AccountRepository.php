<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Class AccountRepository
 * @package AppBundle\Entity
 */
class AccountRepository extends EntityRepository
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * AccountRepository constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param int $specialId
     * @return mixed
     */
    public function getUsersOrderByMarks(int $specialId)
    {
        $repository = $this->em->getRepository(User::class);

        $users = $repository->createQueryBuilder('u')
            ->leftJoin('u.userBaseInfo', 'ubi')
            ->leftJoin('u.userSpecial', 'uus')
            ->leftJoin('uus.special', 'uuss')
            ->where('uuss.id=:specialId')
            ->setParameter('specialId', $specialId)
            ->orderBy('ubi.averageMark', 'desc')
            ->getQuery()
            ->getResult();

        return $users;
    }

}