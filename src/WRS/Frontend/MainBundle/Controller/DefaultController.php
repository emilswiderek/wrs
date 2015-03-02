<?php

namespace WRS\Frontend\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WRSFrontendMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
