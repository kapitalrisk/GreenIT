<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 18:50
 */

namespace App\Service;


use App\Entity\FormQuestion;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormBuilder
{
    private $em;

    private $builder;

    /**
     * FormBuilder constructor.
     *
     * @param EntityManager $em Entity manager from Doctrine
     * @param \Symfony\Component\Form\FormBuilder $builder
     */
    public function __construct(EntityManager $em, \Symfony\Component\Form\FormBuilder $builder)
    {
        $this->em = $em;
        $this->builder = $builder;
    }

    public function buildForm($token = null)
    {
        /** @var FormQuestion[] $questions */
        $questions = $this->em->getRepository(FormQuestion::class)->findAll();
        $builder = $this->builder->create("main");
        foreach ($questions as $question)
        {
            $type = TextType::class;
            $options = ['label' => $question->getContent(), 'required' => false, /* FIXME: 'data' => <USER DATA> */];
            if ($question->getType() === 'choice')
            {
                $type = ChoiceType::class;
                $options['choices'] = null; // FIXME
                $options['multiple'] = $question->getMultiple();
                $builder->add("...", HiddenType::class);
            }
            $builder->add("q".$question->getId(), $type, $options);
        }
        return $builder->getForm();
    }
}