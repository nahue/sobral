<?php

namespace SOB\AlbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DivisionController extends Controller
{
    /**
     * @Route("/divisiones", name="divisiones")
     * @Template()
     */
    public function indexAction()
    {
        $dni = $this->getUser()->getDni();

        $em = $this->getDoctrine()->getManager("alba");
        $docente = $em->getRepository('SOBAlbaBundle:Docente')->findOneByNroDocumento($dni);
        
        return array('docente' => $docente);
    }

}
