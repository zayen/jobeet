<?php

namespace My\JobeetBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\JobeetBundle\Form\PostuleForm;
use Symfony\Component\HttpFoundation\Request;

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
    public function indexAction($category = null)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('MyJobeetBundle:Category')->getAvecJobs();

        if($category) {

            $jobs = $em->getRepository('MyJobeetBundle:Job')->getActiveJobs($category);
        } else {
            $jobs = $em->getRepository('MyJobeetBundle:Job')->getActiveJobs();
        }


        return $this->render('MyJobeetBundle:Job:index.html.twig', array(
            'categories' => $categories,
            'jobs' => $jobs
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
        } else {
            return $this->indexAction();
        }

    }


    /**
     * Finds and displays a Job entity.
     *
     */
    public function postuleAction($email,Request $request)
    {

        $form = $this->createForm(new PostuleForm());

        $form->handleRequest($request);
        if ($request->getMethod() == 'POST'and $form->isValid())
        {
          // Bind value with form
            $form->bindRequest($request);
            $data = $form->getData();
            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject($data['subject'])
                ->setFrom($data['email'])
                ->setTo('$email')
                ->setBody($data['content']);
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('postule_success'));
        }
        return $this->render('MyJobeetBundle:Job:postule.html.twig', array(
            'form' => $form->createView(),
            'email'=>$email
        ));
    }
}
