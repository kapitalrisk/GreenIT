<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 22/11/2018
 * Time: 22:24
 */

namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class AnswerRepository extends EntityRepository
{
    public function tokenExists($token)
    {
        return $this->createQueryBuilder('a')
                    ->where('a.user = :token')
                    ->setParameter('token', $token)
                    ->setMaxResults(1)
                    ->getQuery()->getResult() === null;
    }
}