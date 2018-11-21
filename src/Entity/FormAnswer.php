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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="answers")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(name="answ_id", type="integer", nullable=true)
     */
    private $answer_id;

    /**
    * @ORM\Column(name="content", type="string", nullable=true)
    */
    private $content;

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
     * @param mixed $content
     * @return FormAnswer
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $user
     * @return FormAnswer
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}