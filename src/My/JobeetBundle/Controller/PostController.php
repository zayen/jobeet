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
    public function postAction(Request $request)
    {
        $post = new Post();

        // create the form
        $builder = $this->createFormBuilder($post);
        $builder->add('media', 'sonata_media_type', array(
            'provider' => 'sonata.media.provider.youtube',
            'context' => 'default'
        ));
        $form = $builder->getForm();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($post);
                return $this->redirect($this->generateUrl('post_success'));
            }
        }

        return $this->render('MyJobeetBundle:Post:post.html.twig', array(
            'form' => $form->createView()

        ));
    }
}
