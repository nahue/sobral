<?php
/**
 * Created by PhpStorm.
 * User: nahuelchaves
 * Date: 09/12/13
 * Time: 19:37
 */

namespace CI\UserBundle\EventListener;


use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\NoResultException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Doctrine\Bundle\DoctrineBundle\Registry;

class UserRegistrationListener implements EventSubscriberInterface
{

    protected $doctrine;
    protected $router;

    public function __construct(Registry $doctrine, UrlGeneratorInterface $router)
    {
        $this->doctrine = $doctrine;
        $this->router   = $router;
    }

    /**
     * {@inheritDoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $em  = $this->doctrine->getManager('alba');
        $dni = $event->getForm()->get('dni')->getData();

        try {
            $docente = $em->createQuery(
                'SELECT d FROM SOBAlbaBundle:Docente d
                WHERE d.nroDocumento = :dni'
            )->setParameter('dni', $dni)->getSingleResult();
        } catch (NoResultException $e) {
            $error = new FormError("Docente no encontrado");
            $event->getForm()->addError($error);
            $url = $this->router->generate('fos_user_registration_register');
            $event->setResponse(new RedirectResponse($url));

        }

/*
        if ($docente) {
            //$event->getForm()->get('docente_id')->setData('docente_id', $docente['id']);
            //var_dump($docente->getNroDocumento());
            var_dump($event->getRequest());

        }
*/

    }
}