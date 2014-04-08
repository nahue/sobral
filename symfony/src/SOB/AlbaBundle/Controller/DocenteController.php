<?php

namespace SOB\AlbaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DocenteController extends Controller
{
    /**
     * @Route("/docentes", name="docentes")
     * @Template()
     */
    public function indexAction()
    {
        $em       = $this->getDoctrine()->getManager("alba");
        $docentes = $em->createQuery('SELECT d FROM SOBAlbaBundle:Docente d')->getResult();

        return array(
            'docentes' => $docentes
        );
    }

    /**
     * @Template()
     * @Route("/docentes/{id}", requirements={"id" = "\d+"})
     */
    public function showAction($id)
    {
        $em      = $this->getDoctrine()->getManager("alba");
        $docente = $em->getRepository('SOBAlbaBundle:Docente')->find($id);

        return array(
            'docente' => $docente
        );
    }

}
