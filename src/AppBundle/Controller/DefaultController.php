<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    
    /**
    * @Route("/gdzie-sie-z-checia.html", name="gdzie-sie-z-checia")
    */
    public function gdzieSieZCheciaAction()
    {
        return $this->render('default/gdzie-sie-z-checia.html.twig');
    }

}
