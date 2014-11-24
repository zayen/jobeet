<?php

namespace My\JobeetBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\JobeetBundle\Form\JobRechercheForm;

use My\JobeetBundle\Entity\Job;

/**
 * Job controller.
 *
 */
class JobController extends Controller
{

    /**
     * Lists all Job entities.
     *
     */
    public function indexAction()
    {
        $form = $this->createForm(new JobRechercheForm());

        $em = $this->getDoctrine()->getManager();

        //retour les categorie qui ont liées avec un offre ou plus

        $categories = $em->getRepository('MyJobeetBundle:Category')->getAvecJobs();

        foreach ($categories as $category) {
            $category->setTabJobs(
                $em->getRepository('MyJobeetBundle:Job')->getActiveJobs($category->getId())
            );
        }

        return $this->render('MyJobeetBundle:Job:index.html.twig', array(
            'categories' => $categories,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MyJobeetBundle:Job')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Job entity.');
        }

        return $this->render('MyJobeetBundle:Job:show.html.twig', array(
            'entity' => $entity,
        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function rechercheAction()
    {
        $request = $this->get('request');
        if ($request->isXmlHttpRequest()) {
            $motcle = '';
            $motcle = $request->get('motcle');
            $em = $this->getDoctrine()->getManager();
            if ($motcle != '') {
                $jobs = $em->getRepository('MyJobeetBundle:Job')->getMotCleJobs($motcle);

            } else {
                $jobs = $em->getRepository('MyJobeetBundle:Job')->findAll();
            }
            return $this->render('MyJobeetBundle:Job:liste.html.twig', array(
                'jobs' => $jobs,
            ));
        } else
        {
            return $this->indexAction();
        }



    }
}
