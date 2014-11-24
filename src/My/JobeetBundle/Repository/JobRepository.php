<?php

namespace My\JobeetBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * JobRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
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

    public function getActiveJobs($category = null)
    {
        $qb = $this->createQueryBuilder('j')
            ->where('j.expires_at > :date')
            ->setParameter('date', date('Y-m-d H:i:s', time()))
            ->orderBy('j.expires_at', 'DESC');

        if($category)
        {
            $qb->andWhere('j.category = :category_id')
                ->setParameter('category', $category);
        }

        $query = $qb->getQuery();

        return $query->getResult();
    }


    public function getMotCleJobs($motcle)
    {
        $qb = $this->createQueryBuilder('j')
            ->where("j.description LIKE :motcle OR j.location LIKE :motcle")
            ->setParameter('motcle','%'.$motcle.'%')
            ->orderBy('j.location', 'DESC');



        $query = $qb->getQuery();

        return $query->getResult();
    }
}
