<?php
/**
 * Created by PhpStorm.
 * User: Gonzague
 * Date: 21/11/2018
 * Time: 18:27
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="form", type="integer")
     */
    private $form_id;

    /**
     * @var bool $completed
     * @ORM\Column(name="completed", type="boolean", options={"default" : 0})
     */
    private $completed;

    /**
     * @ORM\Column(name="token", type="string", options={"default" : ""})
     */
    private $token;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFormId()
    {
        return $this->form_id;
    }

    /**
     * @param mixed $form_id
     * @return User
     */
    public function setFormId($form_id)
    {
        $this->form_id = $form_id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->completed;
    }

    /**
     * @param bool $completed
     * @return User
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}