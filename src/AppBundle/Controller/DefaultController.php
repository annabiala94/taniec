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
    
    /**
     * @Route("/tango.html", name="tango")
     */
     public function  tangoAction()
    {
         return $this->render('default/tango.html.twig');
    }
    
    /**
     * @Route("/cha-cha.html", name="cha-cha")
     */
     public function chachaAction()
     {
         return $this->render('default/cha-cha.html.twig');
     }

     /**
     * @Route("/walc-wiedenski.html", name="walc-wiedenski")
     */
     public function  walcwiedenskiAction()
    {
         return $this->render('default/walc-wiedenski.html.twig');
    }


}
