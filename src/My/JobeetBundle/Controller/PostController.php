<?php

namespace My\JobeetBundle\Controller;


use My\JobeetBundle\Entity\Post;
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
    public function postAction()
    {
        $offre = new Post();
        $form = $this->createFormBuilder(new PostForm(),$offre);


        return $this->render('MyJobeetBundle:Post:post.html.twig', array(
            'form' => $form->createView()

        ));
    }
}
