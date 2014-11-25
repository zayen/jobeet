<?php

namespace My\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poste
 */
class Poste
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
     * @var \My\JobeetBundle\Entity\Document
     */
    private $document;


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
     * @return Poste
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
     * @return Poste
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

    /**
     * Set document
     *
     * @param \My\JobeetBundle\Entity\Document $document
     * @return Poste
     */
    public function setDocument(\My\JobeetBundle\Entity\Document $document = null)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return \My\JobeetBundle\Entity\Document 
     */
    public function getDocument()
    {
        return $this->document;
    }
}