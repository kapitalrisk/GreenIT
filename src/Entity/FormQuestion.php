<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 18:23
 */

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="form_question")
 */
class FormQuestion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question")
     */
    private $answers;

    /**
     * @ORM\Column(name="type", type="string", options={"default" : ""})
     */
    private $type;

    /**
     * @ORM\Column(name="choices", type="simple_array", options={"default" : ""})
     */
    private $choices;

    /**
     * @ORM\Column(name="multiple", type="boolean", options={"default" : 0})
     */
    private $multiple;

    /**
     * @ORM\Column(name="expanded", type="boolean", options={"default" : 0})
     */
    private $expanded;

    /**
      * @ORM\Column(name="comment", type="string", options={"default" : ""})
      */
    private $comment;

    /**
      * @ORM\Column(name="category", type="string", options={"default" : ""})
      */
    private $category;

    public function __construct()
    {
        $this->answers = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return FormQuestion
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @param mixed $content
     * @return FormQuestion
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return FormQuestion
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChoices()
    {
        return $this->choices;
    }

    /**
     * @param mixed $choices
     * @return FormQuestion
     */
    public function setChoices($choices)
    {
        $this->choices = $choices;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMultiple()
    {
        return $this->multiple;
    }

    /**
     * @param mixed $multiple
     * @return FormQuestion
     */
    public function setMultiple($multiple)
    {
        $this->multiple = $multiple;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpanded()
    {
        return $this->expanded;
    }

    /**
     * @param mixed $expanded
     * @return FormQuestion
     */
    public function setExpanded($expanded)
    {
        $this->expanded = $expanded;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnswers()
    {
        return $this->answers;
    }
}