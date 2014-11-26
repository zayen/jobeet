<?php

namespace My\JobeetBundle\Controller;


use My\JobeetBundle\Entity\Post;
use My\JobeetBundle\Form\PostType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use My\JobeetBundle\Form\PostForm;
use Symfony\Component\HttpFoundation\Request;


/**
 * Job controller.
 *
 */
class PostController extends Controller
{
    /**
     * Finds and displays a Job entity.
     *
     */
    public function postAction(Request $request)
    {
        $entity  = new Post();
        $form    = $this->createForm(new PostType(), $entity);
        $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                return $this->redirect($this->generateUrl('post_success'));
            }


        return $this->render('MyJobeetBundle:Post:post.html.twig', array(
            'form' => $form->createView()

        ));
    }

    /**
     * Finds and displays a Job entity.
     *
     */
    public function successAction()
    {



        return $this->render('MyJobeetBundle:Post:success.html.twig'

        );
    }
}
