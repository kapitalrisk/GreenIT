<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 18:23
 */

namespace App\Entity;

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
}