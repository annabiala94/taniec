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
     * @Route("/ballet.html", name="ballet")
     */
     public function  balletAction()
    {
         return $this->render('default/ballet.html.twig');
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
    
    /**
     * @Route("/paso-doble.html", name="paso-doble")
     */
     public function  pasodobleAction()
    {
         return $this->render('default/paso-doble.html.twig');
    }
    
    /**
     * @Route("/rumba.html", name="rumba")
     */
     public function  rumbaAction()
    {
         return $this->render('default/rumba.html.twig');
    }

/**
 * @Route("/taniec-brzucha.html", name="taniec-brzucha")
 */
public function  taniecbrzuchaAction()
{
    return $this->render('default/taniec-brzucha.html.twig');
}

    /**
     * @Route("/quickstep.html", name="quickstep")
     */
     public function  quickstepAction()
    {
         return $this->render('default/quickstep.html.twig');
    }
    /**
     * @Route("/flamenco.html", name="flamenco")
     */
     public function  flamencoAction()
    {
         return $this->render('default/flamenco.html.twig');
    }
    /**
     * @Route("/habanera.html", name="habanera")
     */
     public function  habaneraAction()
    {
         return $this->render('default/habanera.html.twig');
    }
}
