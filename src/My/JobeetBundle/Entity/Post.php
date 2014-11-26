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
    private $FirstName;

    /**
     * @var string
     */
    private $LasttName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     */
    private $cv;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     */
    private $LettreM;


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
     * Set FirstName
     *
     * @param string $firstName
     * @return Post
     */
    public function setFirstName($firstName)
    {
        $this->FirstName = $firstName;

        return $this;
    }

    /**
     * Get FirstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * Set LasttName
     *
     * @param string $lasttName
     * @return Post
     */
    public function setLasttName($lasttName)
    {
        $this->LasttName = $lasttName;

        return $this;
    }

    /**
     * Get LasttName
     *
     * @return string 
     */
    public function getLasttName()
    {
        return $this->LasttName;
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
     * Set cv
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $cv
     * @return Post
     */
    public function setCv(\Application\Sonata\MediaBundle\Entity\Media $cv = null)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set LettreM
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $lettreM
     * @return Post
     */
    public function setLettreM(\Application\Sonata\MediaBundle\Entity\Media $lettreM = null)
    {
        $this->LettreM = $lettreM;

        return $this;
    }

    /**
     * Get LettreM
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getLettreM()
    {
        return $this->LettreM;
    }
}
