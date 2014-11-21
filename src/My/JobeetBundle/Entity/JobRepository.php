<?php
/**
 * Created by PhpStorm.
 * User: sebsi
 * Date: 21/11/14
 * Time: 16:14
 */

namespace My\JobeetBundle\Entity;

use Doctrine\ORM\EntityRepository;

class JobRepository extends EntityRepository
{
    public function getList($page=1, $maxperpage=10)
    {
        $q = $this->_em->createQueryBuilder()
            ->select('article')
            ->from('JobeetBundle:Job','job')
        ;

        $q->setFirstResult(($page-1) * $maxperpage)
            ->setMaxResults($maxperpage);

        return new Paginator($q);
    }
}