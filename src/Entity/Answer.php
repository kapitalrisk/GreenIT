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
 * @ORM\Table(name="answer")
 */
class Answer
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="FormQuestion", inversedBy="answers")
     * @ORM\JoinColumn(name="question", referencedColumnName="id")
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="answers")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\Column(name="choice", type="string", nullable=true)
     */
    private $choice;

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
     * @param mixed $content
     * @return Answer
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
     * @return Answer
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

    /**
     * @param mixed $question
     * @return Answer
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

    /**
     * @param mixed $choice
     * @return Answer
     */
    public function setChoice($choice)
    {
        $this->choice = $choice;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChoice()
    {
        return $this->choice;
    }
}