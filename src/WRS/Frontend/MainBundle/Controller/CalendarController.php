<?php

/**
 * Class CalendarController
 *
 * @author Emil Świderek <emil at swiderek.net>
 */
namespace WRS\Frontend\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalendarController extends Controller
{
    /**
     * @todo: read events from database with limit, use function argument
     * @return Response
     */
    public function indexAction(){
        return $this->render('WRSFrontendMainBundle:Calendar:index.html.twig');
    }
}
