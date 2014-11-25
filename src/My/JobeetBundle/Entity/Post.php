<?php

namespace My\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $lettreM;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Post
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set lettreM
     *
     * @param string $lettreM
     * @return Post
     */
    public function setLettreM($lettreM)
    {
        $this->lettreM = $lettreM;

        return $this;
    }

    /**
     * Get lettreM
     *
     * @return string 
     */
    public function getLettreM()
    {
        return $this->lettreM;
    }
}