<?php

namespace Comparator\Bundle\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ComparatorBaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
