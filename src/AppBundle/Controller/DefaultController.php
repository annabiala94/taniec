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
     * @Route("/walc-angielski.html", name="walc-angielski")
     */
     public function  walcangielskiAction()
    {
         return $this->render('default/walc-angielski.html.twig');
    }
    

}
