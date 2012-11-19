<?php

namespace Web\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('WebMainBundle:Category')->getTop();
        return $this->render('WebMainBundle:Default:index.html.twig', array( 'category' => $category));
    }
}
