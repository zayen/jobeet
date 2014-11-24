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
    public function getList($page = 1, $maxperpage = 10)
    {
        $q = $this->_em->createQueryBuilder()
            ->select('article')
            ->from('JobeetBundle:Job', 'job');

        $q->setFirstResult(($page - 1) * $maxperpage)
            ->setMaxResults($maxperpage);

        return new Paginator($q);
    }

    public function getActiveJobs($category_id = null)
    {
        $qb = $this->createQueryBuilder('j')
            ->where('j.expires_at > :date')
            ->setParameter('date', date('Y-m-d H:i:s', time()))
            ->orderBy('j.expires_at', 'DESC');

        if($category_id)
        {
            $qb->andWhere('j.category = :category_id')
                ->setParameter('category_id', $category_id);
        }

        $query = $qb->getQuery();

        return $query->getResult();
    }
}