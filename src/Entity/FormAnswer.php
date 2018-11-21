<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 18:17
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="form_answer")
 */
class FormAnswer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="quest_id", type="integer")
     */
    private $question_id;

    /**
     * @ORM\ManyToOne(targetEntity="FormQuestion", inversedBy="answers")
     * @ORM\JoinColumn(name="q_id", referencedColumnName="id")
     */
    private $question;

    /**
     * @ORM\Column(name="answ_id", type="integer", nullable=true)
     */
    private $answer_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAnswerId()
    {
        return $this->answer_id;
    }

    /**
     * @param mixed $answer_id
     * @return FormAnswer
     */
    public function setAnswerId($answer_id)
    {
        $this->answer_id = $answer_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestionId()
    {
        return $this->question_id;
    }

    /**
     * @param mixed $question_id
     * @return FormAnswer
     */
    public function setQuestionId($question_id)
    {
        $this->question_id = $question_id;
        return $this;
    }

    /**
     * @param mixed $question
     * @return FormAnswer
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }
}