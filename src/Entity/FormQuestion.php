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
 * @ORM\Entity(repositoryClass="App\Repository\FormQuestionRepository")
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
     * @ORM\Column(name="choices", type="text", options={"default" : ""})
     */
    private $choices;
    private $_choices = [];

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

    /**
     * @ORM\Column(name="subcategory", type="string", nullable=true)
     */
    private $subCategory;

    /** @var Answer $answer */
    private $answer;

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
        if (count($this->_choices) == 0)
        {
            $data = explode(';', $this->choices);
            try {
                for ($i = 0; $i < count($data); $i += 2) {
                    $this->_choices[$data[$i]] = $data[$i + 1] == 1;
                }
            }
            catch (\Exception $e)
            {
                echo $e->getTraceAsString();
                echo "<br/>";
                print_r($data);
                echo $this->choices;
            }
        }
        return $this->_choices;
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

    /**
     * @param mixed $comment
     * @return FormQuestion
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $category
     * @return FormQuestion
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @return mixed
     */
    public function getCategoryClass()
    {
        return str_replace(' ', '-', strtolower($this->category));
    }

    /**
     * @param mixed $subCategory
     * @return FormQuestion
     */
    public function setSubCategory($subCategory)
    {
        $this->subCategory = $subCategory;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * @param Answer $answer
     * @return FormQuestion
     */
    public function setAnswer($answer): FormQuestion
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * @return Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}