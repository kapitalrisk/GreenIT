<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 18:50
 */

namespace App\Service;


use Doctrine\ORM\EntityManager;

class FormBuilder
{
    private $em;
    /**
     * FormBuilder constructor.
     *
     * @param EntityManager $em Entity manager from Doctrine
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function buildForm($token = null)
    {

    }
}