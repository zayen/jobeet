<?php

namespace My\JobeetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add jobs
     *
     * @param \My\JobeetBundle\Entity\Job $jobs
     * @return Category
     */
    public function addJob(\My\JobeetBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \My\JobeetBundle\Entity\Job $jobs
     */
    public function removeJob(\My\JobeetBundle\Entity\Job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    public function setJobs($jobs)
    {
        if (count(jobs) > 0) {
            foreach (jobs as $i) {
                $this->addJob($i);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getName();
    }

    private $tab_jobs;

    // ...

    public function setTabJobs($jobs)
    {
        $this->tab_jobs = $jobs;
    }

    public function getTabJobs()
    {
        return $this->tab_jobs;
    }
}
