<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CI\MenuBundle\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;
use Metadata\MetadataFactory;
use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

/**
 * Description of MenuBuilder
 *
 * @author nahuelchaves
 */
class MenuBuilder {

    /** @var \Knp\Menu\FactoryInterface  */
    private $factory;

    /** @var ContainerInterface */
    private $container;


    /** @var Router */
    private $router;


    /**
     * @var SecurityContext
     */
    private $securityContext;


    /**
     * @var MetadataFactory
     */
    private $metadataFactory;

    public function __construct(FactoryInterface $factory, ContainerInterface $container ) {
        $this->factory = $factory;
        $this->container = $container;

        $this->router = $this->container->get('router');
        $this->securityContext = $this->container->get('security.context');
        //$this->metadataFactory = $this->container->get('security.extra.metadata_factory');

        var_dump($this->router);die;
    }
    
    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttributes(array('class' => 'nav'));
        $menu->addChild('Escritorio', array('route' => 'escritorio'))->setAttribute('icon', 'fa fa-home');
        $menu->addChild('Docentes', array('route' => 'docentes'))->setAttribute('icon', 'fa fa-users');
        $menu->addChild('Divisiones', array('route' => 'divisiones'))->setAttribute('icon', 'fa fa-users');

        
        //$menu->setCurrentUri($request->getRequestUri());
        
        return $menu;
    }

    public function filterMenu(ItemInterface $menu)
    {
        foreach ($menu->getChildren() as $child) {
            /** @var \Knp\Menu\MenuItem $child */
            list($route) = $child->getExtra('routes');


            if ($route && !$this->hasRouteAccess($route)) {
                $menu->removeChild($child);
            }


            $this->filterMenu($child);
        }
        return $menu;
    }

    public function hasRouteAccess($routeName)
    {
        $token = $this->securityContext->getToken();
        if ($token->isAuthenticated()) {
            $route = $this->router->getRouteCollection()->get($routeName);
            $controller = $route->getDefault('_controller');
            list($class, $method) = explode('::', $controller, 2);


            /** @var \JMS\SecurityExtraBundle\Metadata\ClassMetadata $metadata */
            $metadata = $this->metadataFactory->getMetadataForClass($class);
            if (!isset($metadata->methodMetadata[$method])) {
                return false;
            }


            foreach ($metadata->methodMetadata[$method]->roles as $role) {
                if ($this->securityContext->isGranted($role)) {
                    return true;
                }
            }
        }
        return false;
    }
}
