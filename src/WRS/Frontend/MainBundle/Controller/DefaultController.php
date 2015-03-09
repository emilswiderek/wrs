<?php

namespace WRS\Frontend\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('WRSFrontendMainBundle:Default:index.html.twig');
    }
    
    public function linksAction(){
        
    }
    
    /**
     * This action is for displaying random header photos
     * @return Response
     */
    public function headerImageAction(){
        return $this->render('WRSFrontendMainBundle:Default:headerImage.html.twig', array(
            'headerimage' => '/bundles/wrsfrontendmain/images/wyjazd_0.jpg',
            'headerimage_desc' => 'test2'));
    }
}
