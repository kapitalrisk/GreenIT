<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 22/11/2018
 * Time: 20:50
 */

namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class FormQuestionRepository extends EntityRepository
{
    public function getAll()
    {
        $qb = $this->createQueryBuilder('q')
                   ->orderBy('q.id');
        return $qb->getQuery()->getResult();
    }
}